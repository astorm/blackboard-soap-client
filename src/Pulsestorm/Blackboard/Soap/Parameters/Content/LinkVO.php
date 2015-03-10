<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\Content;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class LinkVO extends Base
{
    const NAMESPACE_XSD = 'http://content.ws.blackboard/xsd'; 
    const NAME          = 'link'; 
    //start soap data
    public $available;
    public $expansionData;
    public $id;
    public $referredToId;
    public $referredToType;
    public $referrerId;
    public $referrerType;
    public $title;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'referredToId'=>$this->referredToId, 
            'referredToType'=>$this->referredToType, 
            'referrerId'=>$this->referrerId, 
            'referrerType'=>$this->referrerType, 
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