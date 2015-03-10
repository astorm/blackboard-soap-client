<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Calendar;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CalendarItemFilter extends Base
{
    const NAMESPACE_XSD = 'http://calendar.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $courseBatchId;
    public $courseId;
    public $endDate;
    public $expansionData;
    public $filterType;
    public $id;
    public $startDate;
    public $type;
    public $userBatchId;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'courseBatchId'=>$this->courseBatchId, 
            'courseId'=>$this->courseId, 
            'endDate'=>$this->endDate, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'id'=>$this->id, 
            'startDate'=>$this->startDate, 
            'type'=>$this->type, 
            'userBatchId'=>$this->userBatchId, 
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