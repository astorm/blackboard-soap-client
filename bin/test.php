#!/usr/bin/env php
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
namespace Pulsestorm\Cli\Blackboard\Soap\Wsdl\Generator;
require 'vendor/autoload.php';
// require 'bbphp.php';
use Pulsestorm\Blackboard\Soap\Context;
use Pulsestorm\Blackboard\Soap\Client;

function loadConfig()
{
    return include(realpath(dirname(__FILE__)) . '/' . 'config.php');
}

function main($argv)
{
    $config = loadConfig();
    $client = new \Pulsestorm\Blackboard\Soap\Client($config['bb-url']);
    
    $api_context  = $client->getContext();
    $session_id   = $api_context->initialize();
    
    $login_result = $api_context->loginTool($session_id, 
        $config['tool-password'],
        $config['tool-namespace'],
        $config['tool-name'],
        "", 5000);
    
    $memberships  = $api_context->getMemberships($session_id, $config['username']);    
    
    $external_id = $memberships['externalId'];

    $api_course   = $client->getCourse();
    
    $filter = new \Pulsestorm\Blackboard\Soap\Parameters\Course\CourseFilter;
    $filter->filterType = 3;
    $filter->ids = $external_id;
    
    //$membership = $api_course->getCourse($session_id, ['filterType'=>'3','ids'=>$external_id]);
    $membership = $api_course->getCourse($session_id, $filter);
    var_dump($membership);


    
    var_dump($session_id);
    var_dump($login_result);
 
}
main($argv);