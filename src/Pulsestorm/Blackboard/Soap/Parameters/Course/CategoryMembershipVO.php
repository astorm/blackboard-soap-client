<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CategoryMembershipVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'membership'; 
    //start soap data
    public $available;
    public $categoryId;
    public $courseId;
    public $dataSourceId;
    public $expansionData;
    public $id;
    public $organization;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'categoryId'=>$this->categoryId, 
            'courseId'=>$this->courseId, 
            'dataSourceId'=>$this->dataSourceId, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'organization'=>$this->organization, 
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