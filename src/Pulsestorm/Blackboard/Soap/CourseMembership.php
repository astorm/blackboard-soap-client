<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class CourseMembership extends ApiBase
{
    public function initializeCourseMembershipWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->CourseMembership("initializeCourseMembershipWS",$params);
    }
    
    public function saveCourseMembership($session_id,  $courseId=null, Parameters\CourseMembership\CourseMembershipVO $cmArray=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","cmArray");
        return $this->resource->CourseMembership("saveCourseMembership",$params);
    }
    
    public function getCourseMembership($session_id,  $courseId=null, Parameters\CourseMembership\MembershipFilter $f=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","f");
        return $this->resource->CourseMembership("getCourseMembership",$params);
    }
    
    public function getServerVersion($session_id, Parameters\CourseMembership\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->CourseMembership("getServerVersion",$params);
    }
    
    public function saveGroupMembership($session_id,  $courseId=null, Parameters\CourseMembership\GroupMembershipVO $g=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","g");
        return $this->resource->CourseMembership("saveGroupMembership",$params);
    }
    
    public function deleteCourseMembership($session_id,  $courseId=null,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","ids");
        return $this->resource->CourseMembership("deleteCourseMembership",$params);
    }
    
    public function deleteGroupMembership($session_id,  $courseId=null,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","ids");
        return $this->resource->CourseMembership("deleteGroupMembership",$params);
    }
    
    public function getGroupMembership($session_id,  $courseId=null, Parameters\CourseMembership\MembershipFilter $f=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","f");
        return $this->resource->CourseMembership("getGroupMembership",$params);
    }
    
    public function getCourseRoles($session_id, Parameters\CourseMembership\CourseRoleFilter $f=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("f");
        return $this->resource->CourseMembership("getCourseRoles",$params);
    }
}
