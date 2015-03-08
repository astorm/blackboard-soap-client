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
}