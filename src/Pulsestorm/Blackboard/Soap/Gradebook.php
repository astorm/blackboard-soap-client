<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Gradebook extends ApiBase
{
    public function deleteGradingSchemas($session_id,  $courseId=null,  $idsToDelete=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","idsToDelete");
        return $this->resource->Gradebook("deleteGradingSchemas",$params);
    }
    
    public function deleteGrades($session_id,  $courseId=null,  $idsToDelete=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","idsToDelete");
        return $this->resource->Gradebook("deleteGrades",$params);
    }
    
    public function getGradebookColumns($session_id,  $courseId=null, Parameters\Gradebook\ColumnFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Gradebook("getGradebookColumns",$params);
    }
    
    public function initializeGradebookWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->Gradebook("initializeGradebookWS",$params);
    }
    
    public function getGrades($session_id,  $courseId=null, Parameters\Gradebook\ScoreFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Gradebook("getGrades",$params);
    }
    
    public function saveGradebookTypes($session_id,  $courseId=null, Parameters\Gradebook\GradebookTypeVO $gradebookTypes=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","gradebookTypes");
        return $this->resource->Gradebook("saveGradebookTypes",$params);
    }
    
    public function saveAttempts($session_id,  $courseId=null, Parameters\Gradebook\AttemptVO $attempts=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","attempts");
        return $this->resource->Gradebook("saveAttempts",$params);
    }
    
    public function saveGradingSchemas($session_id,  $courseId=null, Parameters\Gradebook\GradingSchemaVO $schemas=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","schemas");
        return $this->resource->Gradebook("saveGradingSchemas",$params);
    }
    
    public function deleteAttempts($session_id,  $courseId=null,  $idsToDelete=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","idsToDelete");
        return $this->resource->Gradebook("deleteAttempts",$params);
    }
    
    public function getRequiredEntitlements($session_id,  $method=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("method");
        return $this->resource->Gradebook("getRequiredEntitlements",$params);
    }
    
    public function saveGrades($session_id,  $courseId=null, Parameters\Gradebook\ScoreVO $grades=null,  $overrideIfManual=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","grades","overrideIfManual");
        return $this->resource->Gradebook("saveGrades",$params);
    }
    
    public function updateColumnAttribute($session_id,  $courseId=null, Parameters\Gradebook\ColumnVO $columns=null,  $attributeId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","columns","attributeId");
        return $this->resource->Gradebook("updateColumnAttribute",$params);
    }
    
    public function getGradingSchemas($session_id,  $courseId=null, Parameters\Gradebook\GradingSchemaFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Gradebook("getGradingSchemas",$params);
    }
    
    public function getGradebookTypes($session_id,  $courseId=null, Parameters\Gradebook\GradebookTypeFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Gradebook("getGradebookTypes",$params);
    }
    
    public function saveColumns($session_id,  $courseId=null, Parameters\Gradebook\ColumnVO $columns=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","columns");
        return $this->resource->Gradebook("saveColumns",$params);
    }
    
    public function deleteColumns($session_id,  $courseId=null,  $idsToDelete=null,  $onlyIfEmpty=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","idsToDelete","onlyIfEmpty");
        return $this->resource->Gradebook("deleteColumns",$params);
    }
    
    public function getAttempts($session_id,  $courseId=null, Parameters\Gradebook\AttemptFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","filter");
        return $this->resource->Gradebook("getAttempts",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Gradebook\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Gradebook("getServerVersion",$params);
    }
    
    public function deleteGradebookTypes($session_id,  $courseId=null,  $idsToDelete=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("courseId","idsToDelete");
        return $this->resource->Gradebook("deleteGradebookTypes",$params);
    }
}
