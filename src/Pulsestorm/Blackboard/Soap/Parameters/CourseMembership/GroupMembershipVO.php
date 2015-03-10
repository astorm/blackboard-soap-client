<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\CourseMembership;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class GroupMembershipVO extends Base
{
    const NAMESPACE_XSD = 'http://coursemembership.ws.blackboard/xsd'; 
    const NAME          = 'g'; 
    //start soap data
    public $courseMembershipId;
    public $expansionData;
    public $groupId;
    public $groupMembershipId;
    //end soap data

    public function getData()
    {
        $data = [
            'courseMembershipId'=>$this->courseMembershipId, 
            'expansionData'=>$this->expansionData, 
            'groupId'=>$this->groupId, 
            'groupMembershipId'=>$this->groupMembershipId, 
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