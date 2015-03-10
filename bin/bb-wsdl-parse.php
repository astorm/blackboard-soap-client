#!/usr/bin/env php
<?php
namespace Pulsestorm\Cli\Blackboard\Soap\Wsdl\Generator;
use Exception;

function loadConfig()
{
    return include(realpath(dirname(__FILE__)) . '/' . 'config.php');
}

function getUrls()
{
    $config = loadConfig();
    $url = $config['bb-url'];
    return [
        'Pulsestorm\Blackboard\Soap\Announcement'     =>$url . '/webapps/ws/services/Announcement.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\Calendar'         =>$url . '/webapps/ws/services/Calendar.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\Content'          =>$url . '/webapps/ws/services/Content.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\Context'          =>$url . '/webapps/ws/services/Context.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\Course'           =>$url . '/webapps/ws/services/Course.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\CourseMembership' =>$url . '/webapps/ws/services/CourseMembership.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\Gradebook'        =>$url . '/webapps/ws/services/Gradebook.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\NotificationDistributorOperations'=>$url . '/webapps/ws/services/NotificationDistributorOperations.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\User'             =>$url . '/webapps/ws/services/User.WS?wsdl',
        'Pulsestorm\Blackboard\Soap\Util'             =>$url . '/webapps/ws/services/Util.WS?wsdl',    
    ];
}

function fetchAndParseWsdl($urls)
{
    foreach($urls as $url)
    {
        echo $url,"\n";
        $contents = file_get_contents($url);        
        $xml = simplexml_load_string($contents);
        
        $xml->registerXPathNamespace('xs', 'http://www.w3.org/2001/XMLSchema');
        $xml->registerXPathNamespace('wsdl', 'http://schemas.xmlsoap.org/wsdl/');
        
        $nodes = $xml->xpath('/wsdl:definitions/wsdl:types/xs:schema[@attributeFormDefault=\'qualified\']/xs:element');
        foreach($nodes as $methods)
        {
            echo '    ' . (string) $methods['name'],"(";    
            foreach($methods->children('http://www.w3.org/2001/XMLSchema') as $complex)
            {
                foreach($complex->children('http://www.w3.org/2001/XMLSchema') as $sequence)
                {
                    $parameters = [];
                    foreach($sequence->children('http://www.w3.org/2001/XMLSchema') as $element)
                    {
                        $attributes = $element->attributes();
                        $name = (string)$attributes['name'];
                        $parameters[] = '$' . $name;
                        // var_dump($element->asXml());
                    }
                    echo implode(',', $parameters);
                }
            }
            echo ")","\n";
        }
    }
}

function indentBy($string, $by='    ')
{
    $parts = preg_split('%[\r\n]%',$string);
    
    $new = [];
    foreach($parts as $key=>$value)
    {
        $new[] = $by . $value;
    }    
    return implode("\n",$new);
}

function generateGeneratedComment()
{
    return '/* Generated File: '.date('Y-m-d H:i:s',time()).'*/';

}

function generateClassContents($namespace, $class, $methods)
{
    return '<' . '?' . 'php'            . "\n" . 
        generateGeneratedComment() . "\n" . 
        'namespace ' . $namespace . ';' . "\n" .
        'class ' . $class               . " extends ApiBase\n" .
        '{'                             . "\n" .       
        indentBy(
        implode("\n\n", $methods))        . "\n" .
        '}'                             . "\n";
}

function output($string)
{
    echo $string,"\n";
}

function loadWsdlAsXmlFromUrl($url)
{
    static $cache = [];
    if(isset($cache[$url]))
    {
        return $cache[$url];
    }
    $contents    = file_get_contents($url);        
    $xml         = simplexml_load_string($contents);
    $cache[$url] = $xml;
    return $xml;
}

function getMethodsAndRequestMessagesFromWsdlPortTypes($xml)
{
    $nodes = $xml->xpath('/wsdl:definitions/wsdl:portType//wsdl:operation');
    $results = [];
    foreach($nodes as $node)
    {
        $attributes       = $node->attributes();
        $attributes_input = $node->children('http://schemas.xmlsoap.org/wsdl/')
            ->input->attributes();
        
        $results[(string)$attributes['name']] = (string)$attributes_input['message'];
    }
    return $results;
}

function getNamespacePortionFromTag($tag)
{
    $parts = explode(':', $tag);
    return array_shift($parts);
}

function getNamePortionFromTag($tag)
{
    $parts = explode(':', $tag);
    return array_pop($parts);
}

function getMessageElementFromXml($message_name, $xml)
{
    $name = getNamePortionFromTag($message_name);
    $xpath = '//wsdl:message[@name="' . $name . '"]';
    $nodes = $xml->xpath($xpath);
    $node  = array_shift($nodes);
    $children = $node->children('http://schemas.xmlsoap.org/wsdl/');
    if(count($children) == 0)
    {
        return false;
    }

    $attributes = $children->attributes();;
    $element = $attributes['element'];
    return $element;
}

function getParametersFromMethodsArrayAndXml($methods, $xml)
{
    $doc_namespaces = $xml->getDocNamespaces();
    $parameters = [];
    foreach($methods as $method=>$message_request_type)
    {
        $element = getMessageElementFromXml($message_request_type, $xml);
        $parameters[$method] = [];
        if(!$element)
        {            
            continue;
        }
        $element_namespace  = getNamespacePortionFromTag((string) $element);
        $element_name       = getNamePortionFromTag((string) $element);
        
        //use results above to lookup //xs:element[@name=""]
        $xpath = '//xs:element[@name="'.$element_name.'"]';
        $nodes = $xml->xpath($xpath);
        $node  = array_shift($nodes);
        $complex_type = $node->children('http://www.w3.org/2001/XMLSchema');
        if($complex_type->getName() != 'complexType')
        {
            throw new Exception("Unexpected Node");
        }
        
        $sequence = $complex_type->children('http://www.w3.org/2001/XMLSchema');
        if($sequence->getName() != 'sequence')
        {
            throw new Exception("Unexpected Node");
        }
        
        foreach($sequence->children('http://www.w3.org/2001/XMLSchema') as $element)
        {
            $element_namespace = getNamespacePortionFromTag(
                (string) $element->attributes()['type']);
            
            $attributes = $element->attributes();
            $parameter  = [
                'name'           => (string)$attributes['name'],
                'type'           => (string)$attributes['type'],
                'complex-config' => false,
                'namespace'      => $doc_namespaces[$element_namespace]
            ];
            if(strpos($parameter['type'], 'xs') !== 0)
            {
                $parameter['complex-config'] = getComplexParameterTypeDefintionFromXml($parameter['type'], $xml);                           
            }

            $parameters[$method][] = $parameter;
            
        }
    }
    return $parameters;
}

function generateMethodBodyFromMethodAndParametersAndClass($method, $parameters,$class)
{
    $is_initialize = getIsInitializeFromMethodName($method);
    $parts      = explode('\\',$class);
    $class_name = array_pop($parts);
    $names = array_map(function($p){
        return generatePhpParamVarFromParam($p);
    }, $parameters);
    
    $line_resource = '    $this->resource->setSessionId($session_id);'   . "\n";        
    $line_params = '    $params = compact("'.implode('","',$names).'");' . "\n";
    if($is_initialize)
    {
        $line_resource = '';
    }    
    if(count($names) === 0)
    {
        $line_params = '    $params = [];';
    }
    return 
        $line_resource . 
        $line_params   . 
        '    return $this->resource->'.$class_name.'("'.$method.'",$params);'   . "\n";
}

function generatePhpParamVarFromParam($param)
{
    //return $param['name'] . getHungarianFromXsType($param['type']);
    return $param['name'];  //. getHungarianFromXsType($param['type']);    
}

function getIsInitializeFromMethodName($method)
{
    return strpos($method, 'initialize') === 0;
}

function generateMethodsFromPortTypesSingleUrl($url, $class)
{
    $xml = loadWsdlAsXmlFromUrl($url);   
    $xml_string = $xml->asXml();
    $xml->registerXPathNamespace('xs', 'http://www.w3.org/2001/XMLSchema');
    $xml->registerXPathNamespace('wsdl', 'http://schemas.xmlsoap.org/wsdl/');
    
    $methods    = getMethodsAndRequestMessagesFromWsdlPortTypes($xml);
    $parameters = getParametersFromMethodsArrayAndXml($methods, $xml); 
    $generated_methods = [];
    foreach(array_keys($methods) as $method)
    {
        $is_initialize = getIsInitializeFromMethodName($method);
        $string = 'public function ' . $method . '(';
        $all = $is_initialize ? [] : ['$session_id'];

        foreach($parameters[$method] as $param)
        {
            $all[] = getTypeHintFromParamAndUrl($param, $url) . ' $' . generatePhpParamVarFromParam($param) .
            '=null';
        }
        $string .= implode(', ', $all);
        $string .= ')' . "\n" .
        '{' . "\n" .
        generateMethodBodyFromMethodAndParametersAndClass($method, $parameters[$method], $class) .
        '}';
        
        $generated_methods[] = $string;
    } 
    $to_save        = accessParameterConfigurations();
    $to_save        = $to_save ? $to_save : [];
    $to_save[$url]  = $parameters;
    accessParameterConfigurations($to_save);
    return $generated_methods;
}

function accessParameterConfigurations($value=false)
{
    static $configs;
    if(!$value)
    {
        return $configs;
    }
    $configs = $value;
}

function accessParameterType($type=false)
{    
    static $types = [];
    if(!$type)
    {
        return $types;
    }
    $types[] = $type;
}

function getTypeHintFromParamAndUrl($param, $url)
{
    $wsdl_namespsace = getPhpNamespaceFromWsdlUrl($url);
    $type = $param['type'];
    if(in_array($type, 
        ['xs:string','xs:boolean','xs:base64Binary','xs:long','xs:int']))
    {
        return '';
    }
    
    $parts      = explode(':', $type);
    $type       = array_pop($parts);
    $namespace  = array_pop($parts);
    if($namespace == 'xs')
    {
        throw new Exception("Unknown Type: [$type]");
    }
    $parameters = 'Parameters\\' . $wsdl_namespsace . '\\' . $type;
    accessParameterType($parameters);
    return $parameters;
}

//looks (and, probably is) janky, but we used this during
//development to identify all the different object types
function getHungarianFromXsType($type)
{
    switch($type)
    {
        case 'xs:string':
            return 'String';
        case 'xs:long':
            return 'String';            
        case 'xs:boolean':
            return 'Boolean';
        case 'xs:base64Binary':
            return 'Base64Binary';   
        case 'xs:int':
            return 'Int';            
        case 'ns0:VersionVO':
            return 'ObjectVersionV0';
        case 'ns2:AnnouncementVO':
            return 'ObjectAnnouncementVO';
        case 'ns2:AnnouncementAttributeFilter':
            return 'ObjectAnnouncementAttributeFilter';
        case 'ns2:CalendarItemVO':
            return 'ObjectCalendarItemVO';
        case 'ns2:CalendarItemFilter':
            return 'ObjectCalendarItemFilter';
        case 'ns0:CourseIdVO':
            return 'ObjectCourseIdVO';
        case 'ns1:ContentVO':
            return 'ObjectContentVO';
        case 'ns1:ContentsReviewedVO':
            return 'ObjectContentsReviewedVO';
        case 'ns1:ContentStatusFilter':
            return 'ObjectContentStatusFilter';                        
        case 'ns1:CourseTOCVO':
            return 'ObjectCourseTOCV0';                 
        case 'ns1:LinkVO':
            return 'ObjectLinkVO';            
        case 'ns1:ContentFileMetadataVO':
            return 'ObjectContentFileMetadataVO';
        case 'ns1:ContentFilter':
            return 'ObjectContentFilter';
        case 'ns1:CategoryFilter':
            return 'ObjectCategoryFilter';
        case 'ns1:CourseFilter':
            return 'ObjectCourseFilter';
        case 'ns1:CourseVO':
            return 'ObjectCourseVO';
        case 'ns1:CategoryVO':
            return 'ObjectCategoryVO';
        case 'ns1:GroupVO':
            return 'ObjectGroupVO';
        case 'ns1:GroupFilter':
            return 'ObjectGroupFilter';
        case 'ns1:TermVO':
            return 'ObjectTermVO';
        case 'ns2:UserVO':
            return 'ObjectUserVO';
        case 'ns0:ScoreVO':
            return 'ObjectScoreVO';
        case 'ns0:ColumnVO':
            return 'ObjectColumnVO';
        case 'ns0:AttemptVO':
            return 'ObjectAttemptVO';
        case 'ns1:VersionVO':
            return 'ObjectVersionVO';
        case 'ns2:UserFilter':
            return 'ObjectUserFilter';
        case 'ns0:ScoreFilter':
            return 'ObjectScoreFilter';
        case 'ns1:CartridgeVO':
            return 'ObjectCartridgeVO';
        case 'ns1:StaffInfoVO':
            return 'ObjectStaffInfoVO';
        case 'ns0:ColumnFilter':
            return 'ObjectColumnFilter';
        case 'ns0:AttemptFilter':
            return 'ObjectAttemptFilter';
        case 'ns0:GradebookTypeVO':
            return 'ObjectGradebookTypeVO';
        case 'ns0:GradingSchemaVO':
            return 'ObjectGradingSchemaVO';
        case 'ns2:CourseRoleFilter':
            return 'ObjectCourseRoleFilter';
        case 'ns2:MembershipFilter':
            return 'ObjectMembershipFilter';
        case 'ns2:GroupMembershipVO':
            return 'ObjectGroupMembershipVO';
        case 'ns2:AddressBookEntryVO':
            return 'ObjectAddressBookEntryVO';
        case 'ns2:CourseMembershipVO':
            return 'ObjectCourseMembershipVO';
        case 'ns0:GradebookTypeFilter':
            return 'ObjectGradebookTypeFilter';
        case 'ns0:GradingSchemaFilter':
            return 'ObjectGradingSchemaFilter';
        case 'ns1:CategoryMembershipVO':
            return 'ObjectCategoryMembershipVO';
        case 'ns2:ObserverAssociationVO':
            return 'ObjectObserverAssociationVO';
        case 'ns1:CategoryMembershipFilter':
            return 'ObjectCategoryMembershipFilter';
            
        default:
//             global $unknown;
//             $unknown[] = $type;
//             return 'Unknown';
            throw new Exception("Unknown xs:type [" . $type . "]");
    }
}

function generateMethodsFromPortTypes($urls)
{
    $methods = [];
    foreach($urls as $class=>$url)
    {
        $methods[$class] = generateMethodsFromPortTypesSingleUrl($url, $class);
    }    
    return $methods;
}

function getBaseDir()
{
    return loadConfig()['base-dir'];
    //'/Users/alanstorm/Documents/github_public/blackboard-soap-client';
}

function getFullPathFromClassname($class)
{
    $base_dir = getBaseDir();
    $path_full = $base_dir . '/' . 
                    str_replace('\\','/',$class) . '.php';    
    return $path_full;                    
}

function makeDirectoryForFileIfDoesntExist($path_full)
{
    $dir_name = dirname($path_full);
    if(!is_dir($dir_name))
    {
        mkdir($dir_name, 0755, true);
    }
}

function generateClientClasses($urls, $methods)
{
    $base_dir = getBaseDir();
    foreach(array_keys($urls) as $class)
    {
        //$path_full = $base_dir . '/' . str_replace('\\','/',$class) . '.php';
        $path_full = getFullPathFromClassname($class);
        $dir_name = dirname($path_full);
        if(!is_dir($dir_name))
        {
            mkdir($dir_name, 0755, true);
        }
        $namespace = str_replace($base_dir, '', $dir_name);
        $namespace = str_replace('/','\\',$namespace);
        $namespace = trim($namespace, '\\');
        
        $parts = explode('\\', $class);
        $class_name = array_pop($parts);
        file_put_contents($path_full, generateClassContents($namespace, $class_name, $methods[$class]));
    }
}

function getPhpNamespaceFromFullPath($full_path)
{
    $base_dir = getBaseDir();
    return str_replace('/','\\',trim(str_replace($base_dir, '', dirname($full_path)),'/'));
}

function getPhpClassNameFromFullPath($full_path)
{
    return str_replace('.php','',basename($full_path));
}

function getPhpNamespaceFromWsdlUrl($url)
{
    $parts = explode('/', $url);
    $name  = array_pop($parts);
    $parts = explode('.', $name);
    return array_shift($parts);
}

function generateParameterClassBody($param)
{
    $body= '    const NAMESPACE_XSD = \''.$param['namespace'].'\'; ' . "\n" .
           '    const NAME          = \''.$param['name'].'\'; ' . "\n" .        
           '    //start soap data' . "\n";
           foreach($param['complex-config'] as $props)
           {
               $body .= '    public $' . $props['name'] . ';' . "\n"; 
           }
    $body .=                      
           '    //end soap data' . "\n\n" .

           '    public function getData()' . "\n" .           
           '    {' . "\n" .
           '        $data = [' . "\n";
           foreach($param['complex-config'] as $props)
           {
               $body .= '            \'' . 
                    $props['name'] . '\'=>$this->' . $props['name'] . ', ' . "\n";
           }        
    $body .= '        ];' . "\n\n"; 
    
    $body .= '        $data = array_filter($data, function($item){' . "\n" .
             '            if($item)' . "\n" .
             '            {' . "\n" .
             '                return true;' . "\n" .
             '            }' . "\n" .
             '            return false;' . "\n" .
             '        });' .    "\n\n" .
             '        return $data;' . "\n\n";
    
    $body .=
           '    }' . "\n\n";           
    return $body;           
}

function generateParamaterClassesFromParams($params, $url)
{
    $wsdl_namespsace = getPhpNamespaceFromWsdlUrl($url);
    foreach($params as $param)
    {
        if(!$param['complex-config']) { continue; }
        $type  = getNamePortionFromTag($param['type']);
        $class = 'Pulsestorm\Blackboard\Soap\Parameters\\' . $wsdl_namespsace . '\\' . $type;
        
        $full_path = getFullPathFromClassname($class);
        makeDirectoryForFileIfDoesntExist($full_path);
        $namespace = getPhpNamespaceFromFullPath($full_path);
        $class_name = getPhpClassNameFromFullPath($full_path);
        
        file_put_contents($full_path, '<' . '?' . 'php' . "\n" .
            generateGeneratedComment() . "\n" .         
            'namespace ' . $namespace . ';' . "\n" . 
            'use Pulsestorm\Blackboard\Soap\Parameters\Base;' . "\n" . 
            'class ' . $class_name . " extends Base\n" . 
            '{' . "\n" . 
            generateParameterClassBody($param) .
            '}');          
        // echo $class,"\n";
    }    
}

function generateParamaterClassesFromUrlAndMethods($url, $methods)
{
    foreach($methods as $params)
    {
        generateParamaterClassesFromParams($params, $url);
    }        
}

function generateParamaterClassesFromAll($parameters_all)
{
    foreach($parameters_all as $url=>$methods)
    {
        generateParamaterClassesFromUrlAndMethods($url, $methods);
    }
}

function getComplexParameterTypeDefintionFromXml($type, $xml)
{
    $parts = explode(':', $type);
    $type  = array_pop($parts);
    $xml->registerXPathNamespace('xs', 'http://www.w3.org/2001/XMLSchema');
    
    $nodes = $xml->xpath('//xs:complexType[@name="' . $type . '"]');
    $node = array_pop($nodes);
    
    $elements = $node->children('http://www.w3.org/2001/XMLSchema')->sequence
    ->children('http://www.w3.org/2001/XMLSchema');
    
    $definition = [];
    foreach($elements as $element)
    {
        $attributes = (array)$element->attributes();
        $definition[] = $attributes['@attributes'];
    }
    return $definition;
}

function main($argv)
{
    $urls = getUrls();
    #fetchAndParseWsdl($urls);
    
    $methods = generateMethodsFromPortTypes($urls);
    generateClientClasses($urls, $methods);        
    
    generateParamaterClassesFromAll(accessParameterConfigurations());
    

}
main($argv);