<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Calendar;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CalendarItemVO extends Base
{
    const NAMESPACE_XSD = 'http://calendar.ws.blackboard/xsd'; 
    const NAME          = 'item'; 
    //start soap data
    public $body;
    public $bodyType;
    public $calendarItemType;
    public $courseId;
    public $creatorUserId;
    public $endDate;
    public $expansionData;
    public $id;
    public $startDate;
    public $title;
    //end soap data

    public function getData()
    {
        $data = [
            'body'=>$this->body, 
            'bodyType'=>$this->bodyType, 
            'calendarItemType'=>$this->calendarItemType, 
            'courseId'=>$this->courseId, 
            'creatorUserId'=>$this->creatorUserId, 
            'endDate'=>$this->endDate, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'startDate'=>$this->startDate, 
            'title'=>$this->title, 
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