<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CategoryVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'adminCategory'; 
    //start soap data
    public $available;
    public $batchUid;
    public $dataSourceId;
    public $description;
    public $expansionData;
    public $frontPage;
    public $id;
    public $organization;
    public $parentId;
    public $restricted;
    public $title;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'batchUid'=>$this->batchUid, 
            'dataSourceId'=>$this->dataSourceId, 
            'description'=>$this->description, 
            'expansionData'=>$this->expansionData, 
            'frontPage'=>$this->frontPage, 
            'id'=>$this->id, 
            'organization'=>$this->organization, 
            'parentId'=>$this->parentId, 
            'restricted'=>$this->restricted, 
            'title'=>$this->title, 
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