#!/usr/bin/env php
<?php
namespace Pulsestorm\Cli\Blackboard\Soap\Wsdl\Generator;
require "bbphp.php";
require 'src/Pulsestorm/Blackboard/Soap/ApiBase.php';
require 'src/Pulsestorm/Blackboard/Soap/Context.php';
require 'src/Pulsestorm/Blackboard/Soap/Resource.php';
require 'src/Pulsestorm/Blackboard/Soap/Client.php';
require 'src/Pulsestorm/Blackboard/Soap/Course.php';
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
    var_dump($memberships);
    exit;
    $api_course   = $client->getCourse();
    
    $membership = $api_course->getCourse($session_id, ['filterType'=>'3','ids'=>$external_id]);
    var_dump($membership);


    
    var_dump($session_id);
    var_dump($login_result);
 
}
main($argv);