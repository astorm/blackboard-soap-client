<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class AttemptFilter extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $expansionData;
    public $filterType;
    public $gradeId;
    public $id;
    public $ids;
    //end soap data

    public function getData()
    {
        $data = [
            'expansionData'=>$this->expansionData, 
            'filterType'=>$this->filterType, 
            'gradeId'=>$this->gradeId, 
            'id'=>$this->id, 
            'ids'=>$this->ids, 
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