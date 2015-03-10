<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class GroupFilter extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $available;
    public $expansionData;
    public $filterType;
    public $groupIds;
    public $userIds;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'groupIds'=>$this->groupIds, 
            'userIds'=>$this->userIds, 
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