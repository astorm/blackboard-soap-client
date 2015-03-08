<?php
namespace Pulsestorm\Blackboard\Soap;
class Resource extends \BBPhp
{
	public function __construct($url = null, $use_curl = true) {
		$this->url = $url;
		$this->use_curl = $use_curl;
		// $this->session_id = $this->Context("initialize");
	}
	
	public function setSessionId($session_id)
	{
	    $this->session_id = $session_id;
	    return $this;
	}
}