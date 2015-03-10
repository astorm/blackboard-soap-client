<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ScoreVO extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'grades'; 
    //start soap data
    public $averageScore;
    public $columnId;
    public $courseId;
    public $exempt;
    public $expansionData;
    public $firstAttemptId;
    public $grade;
    public $highestAttemptId;
    public $id;
    public $instructorComments;
    public $lastAttemptId;
    public $lowestAttemptId;
    public $manualGrade;
    public $manualScore;
    public $memberId;
    public $schemaGradeValue;
    public $shortInstructorComments;
    public $shortStudentComments;
    public $status;
    public $studentComments;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'averageScore'=>$this->averageScore, 
            'columnId'=>$this->columnId, 
            'courseId'=>$this->courseId, 
            'exempt'=>$this->exempt, 
            'expansionData'=>$this->expansionData, 
            'firstAttemptId'=>$this->firstAttemptId, 
            'grade'=>$this->grade, 
            'highestAttemptId'=>$this->highestAttemptId, 
            'id'=>$this->id, 
            'instructorComments'=>$this->instructorComments, 
            'lastAttemptId'=>$this->lastAttemptId, 
            'lowestAttemptId'=>$this->lowestAttemptId, 
            'manualGrade'=>$this->manualGrade, 
            'manualScore'=>$this->manualScore, 
            'memberId'=>$this->memberId, 
            'schemaGradeValue'=>$this->schemaGradeValue, 
            'shortInstructorComments'=>$this->shortInstructorComments, 
            'shortStudentComments'=>$this->shortStudentComments, 
            'status'=>$this->status, 
            'studentComments'=>$this->studentComments, 
            'userId'=>$this->userId, 
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