<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\User;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class ObserverAssociationVO extends Base
{
    const NAMESPACE_XSD = 'http://user.ws.blackboard/xsd'; 
    const NAME          = 'association'; 
    //start soap data
    public $expansionData;
    public $observeeId;
    public $observeeIdByName;
    public $observerId;
    //end soap data

    public function getData()
    {
        $data = [
            'expansionData'=>$this->expansionData, 
            'observeeId'=>$this->observeeId, 
            'observeeIdByName'=>$this->observeeIdByName, 
            'observerId'=>$this->observerId, 
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