<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class GroupVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'vo'; 
    //start soap data
    public $available;
    public $courseId;
    public $description;
    public $descriptionType;
    public $expansionData;
    public $groupTools;
    public $id;
    public $title;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'courseId'=>$this->courseId, 
            'description'=>$this->description, 
            'descriptionType'=>$this->descriptionType, 
            'expansionData'=>$this->expansionData, 
            'groupTools'=>$this->groupTools, 
            'id'=>$this->id, 
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