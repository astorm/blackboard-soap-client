<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Announcement extends ApiBase
{
    public function createCourseAnnouncements($session_id,  $courseId=null, Parameters\Announcement\AnnouncementVO $announcements=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","announcements");
        return $this->resource->Announcement("createCourseAnnouncements",$params);
    }
    
    public function deleteOrgAnnouncements($session_id,  $courseId=null,  $announcementIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","announcementIds");
        return $this->resource->Announcement("deleteOrgAnnouncements",$params);
    }
    
    public function initializeAnnouncementWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Announcement("initializeAnnouncementWS",$params);
    }
    
    public function deleteSystemAnnouncements($session_id,  $announcementIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("announcementIds");
        return $this->resource->Announcement("deleteSystemAnnouncements",$params);
    }
    
    public function getCourseAnnouncements($session_id,  $courseId=null, Parameters\Announcement\AnnouncementAttributeFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Announcement("getCourseAnnouncements",$params);
    }
    
    public function updateCourseAnnouncements($session_id,  $courseId=null, Parameters\Announcement\AnnouncementVO $announcements=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","announcements");
        return $this->resource->Announcement("updateCourseAnnouncements",$params);
    }
    
    public function createOrgAnnouncements($session_id,  $courseId=null, Parameters\Announcement\AnnouncementVO $announcements=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","announcements");
        return $this->resource->Announcement("createOrgAnnouncements",$params);
    }
    
    public function updateOrgAnnouncements($session_id,  $courseId=null, Parameters\Announcement\AnnouncementVO $announcements=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","announcements");
        return $this->resource->Announcement("updateOrgAnnouncements",$params);
    }
    
    public function createSystemAnnouncements($session_id, Parameters\Announcement\AnnouncementVO $announcements=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("announcements");
        return $this->resource->Announcement("createSystemAnnouncements",$params);
    }
    
    public function getSystemAnnouncements($session_id, Parameters\Announcement\AnnouncementAttributeFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Announcement("getSystemAnnouncements",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Announcement\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Announcement("getServerVersion",$params);
    }
    
    public function updateSystemAnnouncements($session_id, Parameters\Announcement\AnnouncementVO $announcements=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("announcements");
        return $this->resource->Announcement("updateSystemAnnouncements",$params);
    }
    
    public function getOrgAnnouncements($session_id,  $orgId=null, Parameters\Announcement\AnnouncementAttributeFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("orgId","filter");
        return $this->resource->Announcement("getOrgAnnouncements",$params);
    }
    
    public function deleteCourseAnnouncements($session_id,  $courseId=null,  $announcementIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","announcementIds");
        return $this->resource->Announcement("deleteCourseAnnouncements",$params);
    }
}
