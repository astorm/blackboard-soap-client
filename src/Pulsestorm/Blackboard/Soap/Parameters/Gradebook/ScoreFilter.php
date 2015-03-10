<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ScoreFilter extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $columnFilters;
    public $columnId;
    public $expansionData;
    public $filterType;
    public $id;
    public $memberIds;
    public $rawScore;
    public $userIds;
    //end soap data

    public function getData()
    {
        $data = [
            'columnFilters'=>$this->columnFilters, 
            'columnId'=>$this->columnId, 
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'id'=>$this->id, 
            'memberIds'=>$this->memberIds, 
            'rawScore'=>$this->rawScore, 
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