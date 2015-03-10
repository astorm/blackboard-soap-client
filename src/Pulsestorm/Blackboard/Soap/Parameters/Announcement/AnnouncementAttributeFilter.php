<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Announcement;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class AnnouncementAttributeFilter extends Base
{
    const NAMESPACE_XSD = 'http://announcement.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $endDate;
    public $expansionData;
    public $filterType;
    public $ids;
    public $startDate;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'endDate'=>$this->endDate, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'ids'=>$this->ids, 
            'startDate'=>$this->startDate, 
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