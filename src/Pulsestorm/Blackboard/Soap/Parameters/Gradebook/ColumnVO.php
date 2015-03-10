<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ColumnVO extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'columns'; 
    //start soap data
    public $aggregationModel;
    public $analysisUrl;
    public $calculationType;
    public $columnDisplayName;
    public $columnName;
    public $contentId;
    public $courseId;
    public $dateCreated;
    public $dateModified;
    public $deleted;
    public $description;
    public $descriptionType;
    public $dueDate;
    public $expansionData;
    public $externalGrade;
    public $gradebookTypeId;
    public $hideAttempt;
    public $id;
    public $multipleAttempts;
    public $position;
    public $possible;
    public $scaleId;
    public $scorable;
    public $showStatsToStudent;
    public $visible;
    public $visibleInBook;
    public $weight;
    //end soap data

    public function getData()
    {
        $data = [
            'aggregationModel'=>$this->aggregationModel, 
            'analysisUrl'=>$this->analysisUrl, 
            'calculationType'=>$this->calculationType, 
            'columnDisplayName'=>$this->columnDisplayName, 
            'columnName'=>$this->columnName, 
            'contentId'=>$this->contentId, 
            'courseId'=>$this->courseId, 
            'dateCreated'=>$this->dateCreated, 
            'dateModified'=>$this->dateModified, 
            'deleted'=>$this->deleted, 
            'description'=>$this->description, 
            'descriptionType'=>$this->descriptionType, 
            'dueDate'=>$this->dueDate, 
            'expansionData'=>$this->expansionData, 
            'externalGrade'=>$this->externalGrade, 
            'gradebookTypeId'=>$this->gradebookTypeId, 
            'hideAttempt'=>$this->hideAttempt, 
            'id'=>$this->id, 
            'multipleAttempts'=>$this->multipleAttempts, 
            'position'=>$this->position, 
            'possible'=>$this->possible, 
            'scaleId'=>$this->scaleId, 
            'scorable'=>$this->scorable, 
            'showStatsToStudent'=>$this->showStatsToStudent, 
            'visible'=>$this->visible, 
            'visibleInBook'=>$this->visibleInBook, 
            'weight'=>$this->weight, 
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