<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class AttemptVO extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'attempts'; 
    //start soap data
    public $attemptDate;
    public $creationDate;
    public $displayGrade;
    public $exempt;
    public $expansionData;
    public $feedbackToUser;
    public $grade;
    public $gradeId;
    public $groupAttemptId;
    public $id;
    public $instructorNotes;
    public $override;
    public $publicFeedbackToUser;
    public $score;
    public $status;
    public $studentComments;
    public $studentSubmission;
    public $studentSubmissionTextType;
    //end soap data

    public function getData()
    {
        $data = [
            'attemptDate'=>$this->attemptDate, 
            'creationDate'=>$this->creationDate, 
            'displayGrade'=>$this->displayGrade, 
            'exempt'=>$this->exempt, 
            'expansionData'=>$this->expansionData, 
            'feedbackToUser'=>$this->feedbackToUser, 
            'grade'=>$this->grade, 
            'gradeId'=>$this->gradeId, 
            'groupAttemptId'=>$this->groupAttemptId, 
            'id'=>$this->id, 
            'instructorNotes'=>$this->instructorNotes, 
            'override'=>$this->override, 
            'publicFeedbackToUser'=>$this->publicFeedbackToUser, 
            'score'=>$this->score, 
            'status'=>$this->status, 
            'studentComments'=>$this->studentComments, 
            'studentSubmission'=>$this->studentSubmission, 
            'studentSubmissionTextType'=>$this->studentSubmissionTextType, 
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