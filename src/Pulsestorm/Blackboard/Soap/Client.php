<?php
namespace Pulsestorm\Blackboard\Soap;
class Client
{
    protected $resource;
    public function __construct($url)
    {
        $this->resource = new Resource($url);
    }
    
    public function getContext()
    {
        return new Context($this->resource);
    }
    
    public function getCourse()
    {
        return new Course($this->resource);
    }        
    
    public function getAnnouncement()
    {
        return new Announcement($this->resource);
    }

    public function getCalendar()
    {
        return new Calendar($this->resource);
    }

    public function getContent()
    {
        return new Content($this->resource);
    }

    public function getCourseMembership()
    {
        return new CourseMembership($this->resource);
    }

    public function getGradebook()
    {
        return new Gradebook($this->resource);
    }

    public function getNotificationDistributorOperations()
    {
        return new NotificationDistributorOperations($this->resource);
    }

    public function getUser()
    {
        return new User($this->resource);
    }

    public function getUtil()
    {
        return new Util($this->resource);
    }
}






