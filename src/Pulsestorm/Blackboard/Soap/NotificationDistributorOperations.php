<?php
/* Generated File: 2015-03-10 06:46:33*/
namespace Pulsestorm\Blackboard\Soap;
class NotificationDistributorOperations extends ApiBase
{
    public function setDistributorAvailabilityForUser($session_id,  $distributorKey=null,  $map=null,  $userKey=null,  $enable=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("distributorKey","map","userKey","enable");
        return $this->resource->NotificationDistributorOperations("setDistributorAvailabilityForUser",$params);
    }
    
    public function initializeNotificationDistributorOperationsWS( $ignore=null)
    {
        $params = compact("ignore");
        return $this->resource->NotificationDistributorOperations("initializeNotificationDistributorOperationsWS",$params);
    }
    
    public function getServerVersion($session_id, Parameters\NotificationDistributorOperations\VersionVO $unused=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("unused");
        return $this->resource->NotificationDistributorOperations("getServerVersion",$params);
    }
    
    public function registerDistributorResults($session_id,  $distributorKey=null,  $results=null)
    {
        $this->resource->setSessionId($session_id);
        $params = compact("distributorKey","results");
        return $this->resource->NotificationDistributorOperations("registerDistributorResults",$params);
    }
}
