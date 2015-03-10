<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Util extends ApiBase
{
    public function checkEntitlement($session_id, Parameters\Util\CourseIdVO $course=null,  $entitlement=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("course","entitlement");
        return $this->resource->Util("checkEntitlement",$params);
    }
    
    public function getRequiredEntitlements($session_id,  $method=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("method");
        return $this->resource->Util("getRequiredEntitlements",$params);
    }
    
    public function getDataSources($session_id,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("ids");
        return $this->resource->Util("getDataSources",$params);
    }
    
    public function saveSetting($session_id,  $scope=null,  $id=null,  $key=null,  $value=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("scope","id","key","value");
        return $this->resource->Util("saveSetting",$params);
    }
    
    public function initializeUtilWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Util("initializeUtilWS",$params);
    }
    
    public function loadSetting($session_id,  $scope=null,  $id=null,  $key=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("scope","id","key");
        return $this->resource->Util("loadSetting",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Util\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Util("getServerVersion",$params);
    }
    
    public function deleteSetting($session_id,  $scope=null,  $id=null,  $key=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("scope","id","key");
        return $this->resource->Util("deleteSetting",$params);
    }
}
