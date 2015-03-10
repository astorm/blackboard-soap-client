<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CourseIdVO extends Base
{
    const NAMESPACE_XSD = 'http://ws.platform.blackboard/xsd'; 
    const NAME          = 'course'; 
    //start soap data
    public $externalId;
    //end soap data

    public function getData()
    {
        $data = [
            'externalId'=>$this->externalId, 
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