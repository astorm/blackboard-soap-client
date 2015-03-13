<?php
/*
 * Copyright (C) 2015 by Pulse Storm LLC (www.pulsestorm.net)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * Copyright (C) 2015 by Pulse Storm LLC (www.pulsestorm.net)
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE. 
 */ 
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






