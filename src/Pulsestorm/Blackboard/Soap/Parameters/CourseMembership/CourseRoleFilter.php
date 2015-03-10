<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\CourseMembership;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CourseRoleFilter extends Base
{
    const NAMESPACE_XSD = 'http://coursemembership.ws.blackboard/xsd'; 
    const NAME          = 'f'; 
    //start soap data
    public $roleIds;
    //end soap data

    public function getData()
    {
        $data = [
            'roleIds'=>$this->roleIds, 
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