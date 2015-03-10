<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\CourseMembership;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class MembershipFilter extends Base
{
    const NAMESPACE_XSD = 'http://coursemembership.ws.blackboard/xsd'; 
    const NAME          = 'f'; 
    //start soap data
    public $courseIds;
    public $courseMembershipIds;
    public $expansionData;
    public $filterType;
    public $groupIds;
    public $groupMembershipIds;
    public $roleIds;
    public $userIds;
    //end soap data

    public function getData()
    {
        $data = [
            'courseIds'=>$this->courseIds, 
            'courseMembershipIds'=>$this->courseMembershipIds, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'groupIds'=>$this->groupIds, 
            'groupMembershipIds'=>$this->groupMembershipIds, 
            'roleIds'=>$this->roleIds, 
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