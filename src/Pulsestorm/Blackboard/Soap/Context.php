<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class Context extends ApiBase
{
    public function deactivateTool($session_id,  $ignore=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("ignore");
        return $this->resource->Context("deactivateTool",$params);
    }
    
    public function initializeVersion2()
    {
        $params = [];    return $this->resource->Context("initializeVersion2",$params);
    }
    
    public function loginTicket($session_id,  $ticket=null,  $clientVendorId=null,  $clientProgramId=null,  $loginExtraInfo=null,  $expectedLifeSeconds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("ticket","clientVendorId","clientProgramId","loginExtraInfo","expectedLifeSeconds");
        return $this->resource->Context("loginTicket",$params);
    }
    
    public function extendSessionLife($session_id,  $additionalSeconds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("additionalSeconds");
        return $this->resource->Context("extendSessionLife",$params);
    }
    
    public function registerTool($session_id,  $clientVendorId=null,  $clientProgramId=null,  $registrationPassword=null,  $description=null,  $initialSharedSecret=null,  $requiredToolMethods=null,  $requiredTicketMethods=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("clientVendorId","clientProgramId","registrationPassword","description","initialSharedSecret","requiredToolMethods","requiredTicketMethods");
        return $this->resource->Context("registerTool",$params);
    }
    
    public function getMyMemberships($session_id)
    {
        $this->resource->setSessionId($session_id);
        $params = [];    return $this->resource->Context("getMyMemberships",$params);
    }
    
    public function getMemberships($session_id,  $userid=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("userid");
        return $this->resource->Context("getMemberships",$params);
    }
    
    public function getRequiredEntitlements($session_id,  $method=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("method");
        return $this->resource->Context("getRequiredEntitlements",$params);
    }
    
    public function loginTool($session_id,  $password=null,  $clientVendorId=null,  $clientProgramId=null,  $loginExtraInfo=null,  $expectedLifeSeconds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("password","clientVendorId","clientProgramId","loginExtraInfo","expectedLifeSeconds");
        return $this->resource->Context("loginTool",$params);
    }
    
    public function logout($session_id)
    {
        $this->resource->setSessionId($session_id);
        $params = [];    return $this->resource->Context("logout",$params);
    }
    
    public function getSystemInstallationId($session_id)
    {
        $this->resource->setSessionId($session_id);
        $params = [];    return $this->resource->Context("getSystemInstallationId",$params);
    }
    
    public function login($session_id,  $userid=null,  $password=null,  $clientVendorId=null,  $clientProgramId=null,  $loginExtraInfo=null,  $expectedLifeSeconds=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("userid","password","clientVendorId","clientProgramId","loginExtraInfo","expectedLifeSeconds");
        return $this->resource->Context("login",$params);
    }
    
    public function getServerVersion($session_id, Parameters\Context\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->Context("getServerVersion",$params);
    }
    
    public function emulateUser($session_id,  $userToEmulate=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("userToEmulate");
        return $this->resource->Context("emulateUser",$params);
    }
    
    public function initialize()
    {
        $params = [];    return $this->resource->Context("initialize",$params);
    }
}
