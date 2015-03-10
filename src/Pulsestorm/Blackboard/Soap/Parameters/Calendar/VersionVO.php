<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Calendar;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class VersionVO extends Base
{
    const NAMESPACE_XSD = 'http://ws.platform.blackboard/xsd'; 
    const NAME          = 'unused'; 
    //start soap data
    public $version;
    //end soap data

    public function getData()
    {
        $data = [
            'version'=>$this->version, 
        ];

        $data = array_filter($data, function($item){
            if($item)
            {
                return true;
            }
            return false;
        });

        return $data;

    }

}