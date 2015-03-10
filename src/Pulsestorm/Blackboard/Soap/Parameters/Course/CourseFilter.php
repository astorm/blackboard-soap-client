<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CourseFilter extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $available;
    public $batchUids;
    public $categoryIds;
    public $courseIds;
    public $courseTemplates;
    public $dataSourceIds;
    public $expansionData;
    public $filterType;
    public $ids;
    public $searchDate;
    public $searchDateOperator;
    public $searchKey;
    public $searchOperator;
    public $searchValue;
    public $sourceBatchUids;
    public $userIds;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'batchUids'=>$this->batchUids, 
            'categoryIds'=>$this->categoryIds, 
            'courseIds'=>$this->courseIds, 
            'courseTemplates'=>$this->courseTemplates, 
            'dataSourceIds'=>$this->dataSourceIds, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'ids'=>$this->ids, 
            'searchDate'=>$this->searchDate, 
            'searchDateOperator'=>$this->searchDateOperator, 
            'searchKey'=>$this->searchKey, 
            'searchOperator'=>$this->searchOperator, 
            'searchValue'=>$this->searchValue, 
            'sourceBatchUids'=>$this->sourceBatchUids, 
            'userIds'=>$this->userIds, 
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