<?php

namespace ImageFIRST;

use \Unirest\Request;

// require_once '../../vendor/autoload.php';

class Client
{
	public $servicePath;

	public function __construct($servicePath = 'http://api.imagefirst.com')
	{
		$this->servicePath = rtrim($servicePath, '/');
	}

	public function get($url, array $headers = array(), array $parameters = array())
	{
		return Request::get($url, $headers, $parameters);
	}

	public function post($url, array $header = array(), array $body = array())
	{
		return Request::post($url, $headers, $body);
	}

	public function delete($url, array $headers = array(), array $body = array())
	{
		return Request::delete($url, $headers, $parameters);
	}

	public function put($url, array $headers = array(), array $body = array())
	{
		return Request::delete($url, $headers, $parameters);
	}
}
