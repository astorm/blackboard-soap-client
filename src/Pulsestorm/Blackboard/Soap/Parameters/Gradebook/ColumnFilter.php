<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Gradebook;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ColumnFilter extends Base
{
    const NAMESPACE_XSD = 'http://gradebook.ws.blackboard/xsd'; 
    const NAME          = 'filter'; 
    //start soap data
    public $expansionData;
    public $externalGrade;
    public $filterType;
    public $ids;
    public $names;
    //end soap data

    public function getData()
    {
        $data = [
            'expansionData'=>$this->expansionData, 
            'externalGrade'=>$this->externalGrade, 
            'filterType'=>$this->filterType, 
            'ids'=>$this->ids, 
            'names'=>$this->names, 
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