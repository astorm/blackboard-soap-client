<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class TermVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'termVo'; 
    //start soap data
    public $available;
    public $dataSrcId;
    public $daysOfUse;
    public $description;
    public $descriptionType;
    public $duration;
    public $endDate;
    public $expansionData;
    public $id;
    public $name;
    public $sourcedidId;
    public $sourcedidSource;
    public $startDate;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'dataSrcId'=>$this->dataSrcId, 
            'daysOfUse'=>$this->daysOfUse, 
            'description'=>$this->description, 
            'descriptionType'=>$this->descriptionType, 
            'duration'=>$this->duration, 
            'endDate'=>$this->endDate, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'name'=>$this->name, 
            'sourcedidId'=>$this->sourcedidId, 
            'sourcedidSource'=>$this->sourcedidSource, 
            'startDate'=>$this->startDate, 
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