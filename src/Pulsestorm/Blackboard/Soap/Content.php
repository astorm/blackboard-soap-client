<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Content extends ApiBase
{
    public function deleteContentFiles($session_id,  $courseId=null,  $contentFileIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","contentFileIds");
        return $this->resource->Content("deleteContentFiles",$params);
    }
    
    public function initializeContentWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Content("initializeContentWS",$params);
    }
    
    public function updateContentFileLinkName($session_id,  $courseId=null,  $contentId=null,  $contentFileId=null,  $newLinkName=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","contentId","contentFileId","newLinkName");
        return $this->resource->Content("updateContentFileLinkName",$params);
    }
    
    public function saveContent($session_id, Parameters\Content\CourseIdVO $course=null, Parameters\Content\ContentVO $content=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("course","content");
        return $this->resource->Content("saveContent",$params);
    }
    
    public function getReviewStatusByCourseId($session_id,  $courseId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId");
        return $this->resource->Content("getReviewStatusByCourseId",$params);
    }
    
    public function deleteContents($session_id,  $courseId=null,  $contentIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","contentIds");
        return $this->resource->Content("deleteContents",$params);
    }
    
    public function removeContent($session_id, Parameters\Content\CourseIdVO $course=null,  $contentId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("course","contentId");
        return $this->resource->Content("removeContent",$params);
    }
    
    public function saveContentsReviewed($session_id,  $courseId=null, Parameters\Content\ContentsReviewedVO $vo=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","vo");
        return $this->resource->Content("saveContentsReviewed",$params);
    }
    
    public function getContentFiles($session_id,  $courseId=null,  $contentId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","contentId");
        return $this->resource->Content("getContentFiles",$params);
    }
    
    public function getFilteredCourseStatus($session_id,  $courseId=null, Parameters\Content\ContentStatusFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Content("getFilteredCourseStatus",$params);
    }
    
    public function saveCourseTOC($session_id,  $courseId=null, Parameters\Content\CourseTOCVO $vo=null, Parameters\Content\LinkVO $linkVO=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","vo","linkVO");
        return $this->resource->Content("saveCourseTOC",$params);
    }
    
    public function getRequiredEntitlements($session_id,  $method=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("method");
        return $this->resource->Content("getRequiredEntitlements",$params);
    }
    
    public function getTOCsByCourseId($session_id,  $courseId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId");
        return $this->resource->Content("getTOCsByCourseId",$params);
    }
    
    public function getLinksByReferrerType($session_id,  $courseId=null,  $referrerType=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","referrerType");
        return $this->resource->Content("getLinksByReferrerType",$params);
    }
    
    public function initializeVersion2ContentWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Content("initializeVersion2ContentWS",$params);
    }
    
    public function deleteCourseTOCs($session_id,  $courseId=null,  $tocIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","tocIds");
        return $this->resource->Content("deleteCourseTOCs",$params);
    }
    
    public function deleteLinks($session_id,  $courseId=null,  $linkIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","linkIds");
        return $this->resource->Content("deleteLinks",$params);
    }
    
    public function addContentFile($session_id,  $courseId=null,  $contentId=null, Parameters\Content\ContentFileMetadataVO $contentFile=null,  $fileContents=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","contentId","contentFile","fileContents");
        return $this->resource->Content("addContentFile",$params);
    }
    
    public function saveLink($session_id,  $courseId=null, Parameters\Content\LinkVO $link=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","link");
        return $this->resource->Content("saveLink",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Content\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Content("getServerVersion",$params);
    }
    
    public function getFilteredContent($session_id,  $courseId=null, Parameters\Content\ContentFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Content("getFilteredContent",$params);
    }
    
    public function loadContent($session_id, Parameters\Content\CourseIdVO $course=null,  $contentId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("course","contentId");
        return $this->resource->Content("loadContent",$params);
    }
    
    public function getLinksByReferredToType($session_id,  $courseId=null,  $referrerToType=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","referrerToType");
        return $this->resource->Content("getLinksByReferredToType",$params);
    }
}
