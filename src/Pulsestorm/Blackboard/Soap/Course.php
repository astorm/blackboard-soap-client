<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Course extends ApiBase
{
    public function getCategories($session_id, Parameters\Course\CategoryFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Course("getCategories",$params);
    }
    
    public function getCourse($session_id, Parameters\Course\CourseFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Course("getCourse",$params);
    }
    
    public function createCourse($session_id, Parameters\Course\CourseVO $c=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("c");
        return $this->resource->Course("createCourse",$params);
    }
    
    public function deleteOrg($session_id,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("ids");
        return $this->resource->Course("deleteOrg",$params);
    }
    
    public function changeOrgBatchUid($session_id,  $oldBatchUid=null,  $newBatchUid=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("oldBatchUid","newBatchUid");
        return $this->resource->Course("changeOrgBatchUid",$params);
    }
    
    public function saveCourseCategory($session_id, Parameters\Course\CategoryVO $adminCategory=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("adminCategory");
        return $this->resource->Course("saveCourseCategory",$params);
    }
    
    public function saveGroup($session_id,  $courseId=null, Parameters\Course\GroupVO $vo=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","vo");
        return $this->resource->Course("saveGroup",$params);
    }
    
    public function removeCourseFromTerm($session_id,  $courseID=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseID");
        return $this->resource->Course("removeCourseFromTerm",$params);
    }
    
    public function loadTermsByName($session_id,  $name=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("name");
        return $this->resource->Course("loadTermsByName",$params);
    }
    
    public function getGroup($session_id,  $courseId=null, Parameters\Course\GroupFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Course("getGroup",$params);
    }
    
    public function deleteCourseCategoryMembership($session_id,  $categoryMembershipIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("categoryMembershipIds");
        return $this->resource->Course("deleteCourseCategoryMembership",$params);
    }
    
    public function saveTerm($session_id, Parameters\Course\TermVO $termVo=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("termVo");
        return $this->resource->Course("saveTerm",$params);
    }
    
    public function loadCoursesInTerm($session_id,  $termID=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("termID");
        return $this->resource->Course("loadCoursesInTerm",$params);
    }
    
    public function deleteCourse($session_id,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("ids");
        return $this->resource->Course("deleteCourse",$params);
    }
    
    public function createOrg($session_id, Parameters\Course\CourseVO $c=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("c");
        return $this->resource->Course("createOrg",$params);
    }
    
    public function changeOrgCategoryBatchUid($session_id,  $categoryId=null,  $newBatchUid=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("categoryId","newBatchUid");
        return $this->resource->Course("changeOrgCategoryBatchUid",$params);
    }
    
    public function deleteOrgCategoryMembership($session_id,  $categoryMembershipIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("categoryMembershipIds");
        return $this->resource->Course("deleteOrgCategoryMembership",$params);
    }
    
    public function getClassifications($session_id,  $classificationIdMask=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("classificationIdMask");
        return $this->resource->Course("getClassifications",$params);
    }
    
    public function getOrg($session_id, Parameters\Course\CourseFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Course("getOrg",$params);
    }
    
    public function updateOrg($session_id, Parameters\Course\CourseVO $c=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("c");
        return $this->resource->Course("updateOrg",$params);
    }
    
    public function getOrgCategoryMembership($session_id, Parameters\Course\CategoryMembershipFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Course("getOrgCategoryMembership",$params);
    }
    
    public function deleteOrgCategory($session_id,  $categoryIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("categoryIds");
        return $this->resource->Course("deleteOrgCategory",$params);
    }
    
    public function changeCourseCategoryBatchUid($session_id,  $categoryId=null,  $newBatchUid=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("categoryId","newBatchUid");
        return $this->resource->Course("changeCourseCategoryBatchUid",$params);
    }
    
    public function setCourseBannerImage($session_id,  $courseId=null,  $removeOnly=null,  $fileName=null,  $fileContents=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","removeOnly","fileName","fileContents");
        return $this->resource->Course("setCourseBannerImage",$params);
    }
    
    public function getCartridge($session_id,  $cartridgeId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("cartridgeId");
        return $this->resource->Course("getCartridge",$params);
    }
    
    public function loadTerm($session_id,  $termID=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("termID");
        return $this->resource->Course("loadTerm",$params);
    }
    
    public function deleteCourseCategory($session_id,  $categoryIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("categoryIds");
        return $this->resource->Course("deleteCourseCategory",$params);
    }
    
    public function changeOrgDataSourceId($session_id,  $courseId=null,  $newDataSourceId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","newDataSourceId");
        return $this->resource->Course("changeOrgDataSourceId",$params);
    }
    
    public function initializeCourseWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Course("initializeCourseWS",$params);
    }
    
    public function getCourseCategoryMembership($session_id, Parameters\Course\CategoryMembershipFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->Course("getCourseCategoryMembership",$params);
    }
    
    public function updateCourse($session_id, Parameters\Course\CourseVO $c=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("c");
        return $this->resource->Course("updateCourse",$params);
    }
    
    public function loadTermByCourseId($session_id,  $courseID=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseID");
        return $this->resource->Course("loadTermByCourseId",$params);
    }
    
    public function addCourseToTerm($session_id,  $courseID=null,  $termID=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseID","termID");
        return $this->resource->Course("addCourseToTerm",$params);
    }
    
    public function getAvailableGroupTools($session_id,  $courseId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId");
        return $this->resource->Course("getAvailableGroupTools",$params);
    }
    
    public function deleteCartridge($session_id,  $cartridgeId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("cartridgeId");
        return $this->resource->Course("deleteCartridge",$params);
    }
    
    public function deleteStaffInfo($session_id,  $courseId=null,  $staffInfoIds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","staffInfoIds");
        return $this->resource->Course("deleteStaffInfo",$params);
    }
    
    public function saveStaffInfo($session_id,  $courseId=null, Parameters\Course\StaffInfoVO $vo=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","vo");
        return $this->resource->Course("saveStaffInfo",$params);
    }
    
    public function saveOrgCategory($session_id, Parameters\Course\CategoryVO $adminCategory=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("adminCategory");
        return $this->resource->Course("saveOrgCategory",$params);
    }
    
    public function deleteGroup($session_id,  $courseId=null,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","ids");
        return $this->resource->Course("deleteGroup",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Course\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Course("getServerVersion",$params);
    }
    
    public function saveCourse($session_id, Parameters\Course\CourseVO $c=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("c");
        return $this->resource->Course("saveCourse",$params);
    }
    
    public function saveCartridge($session_id, Parameters\Course\CartridgeVO $vo=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("vo");
        return $this->resource->Course("saveCartridge",$params);
    }
    
    public function saveOrgCategoryMembership($session_id, Parameters\Course\CategoryMembershipVO $membership=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("membership");
        return $this->resource->Course("saveOrgCategoryMembership",$params);
    }
    
    public function getStaffInfo($session_id,  $courseId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId");
        return $this->resource->Course("getStaffInfo",$params);
    }
    
    public function saveCourseCategoryMembership($session_id, Parameters\Course\CategoryMembershipVO $membership=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("membership");
        return $this->resource->Course("saveCourseCategoryMembership",$params);
    }
    
    public function changeCourseBatchUid($session_id,  $oldBatchUid=null,  $newBatchUid=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("oldBatchUid","newBatchUid");
        return $this->resource->Course("changeCourseBatchUid",$params);
    }
    
    public function deleteTerm($session_id,  $termID=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("termID");
        return $this->resource->Course("deleteTerm",$params);
    }
    
    public function changeCourseDataSourceId($session_id,  $courseId=null,  $newDataSourceId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","newDataSourceId");
        return $this->resource->Course("changeCourseDataSourceId",$params);
    }
    
    public function loadTerms($session_id,  $onlyAvailable=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("onlyAvailable");
        return $this->resource->Course("loadTerms",$params);
    }
}
