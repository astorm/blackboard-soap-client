<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class GradingSchemaVO extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'schemas'; 
    //start soap data
    public $courseId;
    public $description;
    public $expansionData;
    public $id;
    public $numeric;
    public $percentage;
    public $scaleType;
    public $symbols;
    public $tabular;
    public $title;
    public $userDefined;
    public $version;
    //end soap data

    public function getData()
    {
        $data = [
            'courseId'=>$this->courseId, 
            'description'=>$this->description, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'numeric'=>$this->numeric, 
            'percentage'=>$this->percentage, 
            'scaleType'=>$this->scaleType, 
            'symbols'=>$this->symbols, 
            'tabular'=>$this->tabular, 
            'title'=>$this->title, 
            'userDefined'=>$this->userDefined, 
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