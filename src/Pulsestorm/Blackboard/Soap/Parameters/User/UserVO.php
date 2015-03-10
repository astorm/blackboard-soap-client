<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\User;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class UserVO extends Base
{
    const NAMESPACE_XSD = 'http://user.ws.blackboard/xsd'; 
    const NAME          = 'user'; 
    //start soap data
    public $birthDate;
    public $dataSourceId;
    public $educationLevel;
    public $expansionData;
    public $extendedInfo;
    public $genderType;
    public $id;
    public $insRoles;
    public $isAvailable;
    public $name;
    public $password;
    public $studentId;
    public $systemRoles;
    public $title;
    public $userBatchUid;
    //end soap data

    public function getData()
    {
        $data = [
            'birthDate'=>$this->birthDate, 
            'dataSourceId'=>$this->dataSourceId, 
            'educationLevel'=>$this->educationLevel, 
            'expansionData'=>$this->expansionData, 
            'extendedInfo'=>$this->extendedInfo, 
            'genderType'=>$this->genderType, 
            'id'=>$this->id, 
            'insRoles'=>$this->insRoles, 
            'isAvailable'=>$this->isAvailable, 
            'name'=>$this->name, 
            'password'=>$this->password, 
            'studentId'=>$this->studentId, 
            'systemRoles'=>$this->systemRoles, 
            'title'=>$this->title, 
            'userBatchUid'=>$this->userBatchUid, 
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