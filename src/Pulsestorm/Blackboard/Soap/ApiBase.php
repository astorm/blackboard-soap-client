<?php
namespace Pulsestorm\Blackboard\Soap;
class ApiBase
{
    protected $resource;
    public function __construct($resource)
    {
        $this->resource = $resource;
    }
}