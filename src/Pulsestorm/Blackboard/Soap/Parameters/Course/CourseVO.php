<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CourseVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'c'; 
    //start soap data
    public $allowGuests;
    public $allowObservers;
    public $available;
    public $batchUid;
    public $buttonStyleBbId;
    public $buttonStyleShape;
    public $buttonStyleType;
    public $cartridgeId;
    public $classificationId;
    public $courseDuration;
    public $courseId;
    public $coursePace;
    public $courseServiceLevel;
    public $dataSourceId;
    public $decAbsoluteLimit;
    public $description;
    public $endDate;
    public $enrollmentAccessCode;
    public $enrollmentEndDate;
    public $enrollmentStartDate;
    public $enrollmentType;
    public $expansionData;
    public $fee;
    public $hasDescriptionPage;
    public $id;
    public $institutionName;
    public $locale;
    public $localeEnforced;
    public $lockedOut;
    public $name;
    public $navCollapsable;
    public $navColorBg;
    public $navColorFg;
    public $navigationStyle;
    public $numberOfDaysOfUse;
    public $organization;
    public $showInCatalog;
    public $softLimit;
    public $startDate;
    public $uploadLimit;
    //end soap data

    public function getData()
    {
        $data = [
            'allowGuests'=>$this->allowGuests, 
            'allowObservers'=>$this->allowObservers, 
            'available'=>$this->available, 
            'batchUid'=>$this->batchUid, 
            'buttonStyleBbId'=>$this->buttonStyleBbId, 
            'buttonStyleShape'=>$this->buttonStyleShape, 
            'buttonStyleType'=>$this->buttonStyleType, 
            'cartridgeId'=>$this->cartridgeId, 
            'classificationId'=>$this->classificationId, 
            'courseDuration'=>$this->courseDuration, 
            'courseId'=>$this->courseId, 
            'coursePace'=>$this->coursePace, 
            'courseServiceLevel'=>$this->courseServiceLevel, 
            'dataSourceId'=>$this->dataSourceId, 
            'decAbsoluteLimit'=>$this->decAbsoluteLimit, 
            'description'=>$this->description, 
            'endDate'=>$this->endDate, 
            'enrollmentAccessCode'=>$this->enrollmentAccessCode, 
            'enrollmentEndDate'=>$this->enrollmentEndDate, 
            'enrollmentStartDate'=>$this->enrollmentStartDate, 
            'enrollmentType'=>$this->enrollmentType, 
            'expansionData'=>$this->expansionData, 
            'fee'=>$this->fee, 
            'hasDescriptionPage'=>$this->hasDescriptionPage, 
            'id'=>$this->id, 
            'institutionName'=>$this->institutionName, 
            'locale'=>$this->locale, 
            'localeEnforced'=>$this->localeEnforced, 
            'lockedOut'=>$this->lockedOut, 
            'name'=>$this->name, 
            'navCollapsable'=>$this->navCollapsable, 
            'navColorBg'=>$this->navColorBg, 
            'navColorFg'=>$this->navColorFg, 
            'navigationStyle'=>$this->navigationStyle, 
            'numberOfDaysOfUse'=>$this->numberOfDaysOfUse, 
            'organization'=>$this->organization, 
            'showInCatalog'=>$this->showInCatalog, 
            'softLimit'=>$this->softLimit, 
            'startDate'=>$this->startDate, 
            'uploadLimit'=>$this->uploadLimit, 
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