<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap\Parameters\CourseMembership;
use Pulsestorm\Blackboard\Soap\Parameters\Base;
class CourseMembershipVO extends Base
{
    const NAMESPACE_XSD = 'http://coursemembership.ws.blackboard/xsd'; 
    const NAME          = 'cmArray'; 
    //start soap data
    public $available;
    public $courseId;
    public $dataSourceId;
    public $enrollmentDate;
    public $expansionData;
    public $hasCartridgeAccess;
    public $id;
    public $imageFile;
    public $roleId;
    public $userId;
    //end soap data

    public function getData()
    {
        $data = [
            'available'=>$this->available, 
            'courseId'=>$this->courseId, 
            'dataSourceId'=>$this->dataSourceId, 
            'enrollmentDate'=>$this->enrollmentDate, 
            'expansionData'=>$this->expansionData, 
            'hasCartridgeAccess'=>$this->hasCartridgeAccess, 
            'id'=>$this->id, 
            'imageFile'=>$this->imageFile, 
            'roleId'=>$this->roleId, 
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