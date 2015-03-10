<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class User extends ApiBase
{
    public function getUser($session_id, Parameters\User\UserFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->User("getUser",$params);
    }
    
    public function getSystemRoles($session_id,  $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->User("getSystemRoles",$params);
    }
    
    public function saveUser($session_id, Parameters\User\UserVO $user=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("user");
        return $this->resource->User("saveUser",$params);
    }
    
    public function saveObserverAssociation($session_id, Parameters\User\ObserverAssociationVO $association=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("association");
        return $this->resource->User("saveObserverAssociation",$params);
    }
    
    public function saveAddressBookEntry($session_id, Parameters\User\AddressBookEntryVO $user=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("user");
        return $this->resource->User("saveAddressBookEntry",$params);
    }
    
    public function deleteUserByInstitutionRole($session_id,  $insRoleId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("insRoleId");
        return $this->resource->User("deleteUserByInstitutionRole",$params);
    }
    
    public function initializeUserWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->User("initializeUserWS",$params);
    }
    
    public function changeUserBatchUid($session_id,  $originalBatchUid=null,  $batchUid=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("originalBatchUid","batchUid");
        return $this->resource->User("changeUserBatchUid",$params);
    }
    
    public function changeUserDataSourceId($session_id,  $userId=null,  $dataSourceId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("userId","dataSourceId");
        return $this->resource->User("changeUserDataSourceId",$params);
    }
    
    public function deleteObserverAssociation($session_id, Parameters\User\ObserverAssociationVO $association=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("association");
        return $this->resource->User("deleteObserverAssociation",$params);
    }
    
    public function getUserInstitutionRoles($session_id,  $userId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("userId");
        return $this->resource->User("getUserInstitutionRoles",$params);
    }
    
    public function getInstitutionRoles($session_id,  $ids=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("ids");
        return $this->resource->User("getInstitutionRoles",$params);
    }
    
    public function deleteAddressBookEntry($session_id,  $entryId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("entryId");
        return $this->resource->User("deleteAddressBookEntry",$params);
    }
    
    public function getObservee($session_id,  $observerId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("observerId");
        return $this->resource->User("getObservee",$params);
    }
    
    public function deleteUser($session_id,  $userId=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("userId");
        return $this->resource->User("deleteUser",$params);
    }
    
    public function getServerVersion($session_id, Parameters\User\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->User("getServerVersion",$params);
    }
    
    public function getAddressBookEntry($session_id, Parameters\User\UserFilter $filter=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("filter");
        return $this->resource->User("getAddressBookEntry",$params);
    }
}
