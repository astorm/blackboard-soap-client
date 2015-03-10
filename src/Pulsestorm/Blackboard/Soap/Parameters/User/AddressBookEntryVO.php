<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\User;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class AddressBookEntryVO extends Base
{
    const NAMESPACE_XSD = 'http://user.ws.blackboard/xsd'; 
    const NAME          = 'user'; 
    //start soap data
    public $addressBookEntry;
    public $expansionData;
    public $id;
    public $title;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'addressBookEntry'=>$this->addressBookEntry, 
            'expansionData'=>$this->expansionData, 
            'id'=>$this->id, 
            'title'=>$this->title, 
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