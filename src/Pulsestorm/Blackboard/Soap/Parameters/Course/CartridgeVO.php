<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Course;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CartridgeVO extends Base
{
    const NAMESPACE_XSD = 'http://course.ws.blackboard/xsd'; 
    const NAME          = 'vo'; 
    //start soap data
    public $description;
    public $expansionData;
    public $id;
    public $identifier;
    public $publisherName;
    public $title;
    //end soap data

    public function getData()
    {
        $data = [
            'description'=>$this->description, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'identifier'=>$this->identifier, 
            'publisherName'=>$this->publisherName, 
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