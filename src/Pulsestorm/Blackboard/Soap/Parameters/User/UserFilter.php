<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\User;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class UserFilter extends Base
{
    const NAMESPACE_XSD = 'http://user.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $available;
    public $batchId;
    public $courseId;
    public $expansionData;
    public $filterType;
    public $groupId;
    public $id;
    public $name;
    public $systemRoles;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'batchId'=>$this->batchId, 
            'courseId'=>$this->courseId, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'groupId'=>$this->groupId, 
            'id'=>$this->id, 
            'name'=>$this->name, 
            'systemRoles'=>$this->systemRoles, 
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