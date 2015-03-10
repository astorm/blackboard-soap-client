<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Calendar extends ApiBase
{
    public function savePersonalCalendarItem($session_id, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("item");
        return $this->resource->Calendar("savePersonalCalendarItem",$params);
    }
    
    public function getCalendarItem($session_id, Parameters\Calendar\CalendarItemFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Calendar("getCalendarItem",$params);
    }
    
    public function updateCourseCalendarItem($session_id,  $courseId=null, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","item");
        return $this->resource->Calendar("updateCourseCalendarItem",$params);
    }
    
    public function saveCourseCalendarItem($session_id,  $courseId=null, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","item");
        return $this->resource->Calendar("saveCourseCalendarItem",$params);
    }
    
    public function deletePersonalCalendarItem($session_id,  $itemId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("itemId");
        return $this->resource->Calendar("deletePersonalCalendarItem",$params);
    }
    
    public function canUpdateCourseCalendarItem($session_id,  $courseId=null,  $itemId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","itemId");
        return $this->resource->Calendar("canUpdateCourseCalendarItem",$params);
    }
    
    public function createInstitutionCalendarItem($session_id, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("item");
        return $this->resource->Calendar("createInstitutionCalendarItem",$params);
    }
    
    public function updateInstitutionCalendarItem($session_id, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("item");
        return $this->resource->Calendar("updateInstitutionCalendarItem",$params);
    }
    
    public function deleteCourseCalendarItem($session_id,  $courseId=null,  $itemId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","itemId");
        return $this->resource->Calendar("deleteCourseCalendarItem",$params);
    }
    
    public function createCourseCalendarItem($session_id,  $courseId=null, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","item");
        return $this->resource->Calendar("createCourseCalendarItem",$params);
    }
    
    public function canUpdateInstitutionCalendarItem($session_id,  $itemId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("itemId");
        return $this->resource->Calendar("canUpdateInstitutionCalendarItem",$params);
    }
    
    public function saveInstitutionCalendarItem($session_id, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("item");
        return $this->resource->Calendar("saveInstitutionCalendarItem",$params);
    }
    
    public function deleteInstitutionCalendarItem($session_id,  $itemId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("itemId");
        return $this->resource->Calendar("deleteInstitutionCalendarItem",$params);
    }
    
    public function canUpdatePersonalCalendarItem($session_id,  $itemId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("itemId");
        return $this->resource->Calendar("canUpdatePersonalCalendarItem",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Calendar\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Calendar("getServerVersion",$params);
    }
    
    public function initializeCalendarWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Calendar("initializeCalendarWS",$params);
    }
    
    public function createPersonalCalendarItem($session_id, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("item");
        return $this->resource->Calendar("createPersonalCalendarItem",$params);
    }
    
    public function updatePersonalCalendarItem($session_id, Parameters\Calendar\CalendarItemVO $item=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("item");
        return $this->resource->Calendar("updatePersonalCalendarItem",$params);
    }
}
