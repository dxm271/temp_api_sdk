<?php

namespace ImageFIRST\Service;

use ImageFIRST\Client;
use ImageFIRST\Service\Customer\Users;

class Customer
{
	public $client;

	public $version;
	public $servicePath;
	public $serviceName;

	public $users;

	public function __construct(Client $client)
	{
		$this->client = $client;

		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'customer';

		// Construct the service helpers
		$this->users = new Users($this);
	}

	public function get($route, array $headers = array(), array $parameters = array())
	{
		$url = $this->client->servicePath . $this->servicePath . $route;

		return $this->client->get($url, $headers, $parameters);
	}

	public function post($route, array $headers = array(), array $body = array())
	{
		$url = $this->client->servicePath . $this->servicePath . $route;

		return $this->client->post($url, $headers, $body);
	}

	public function delete($route, array $headers = array(), array $body = array())
	{
		$url = $this->client->servicePath . $this->servicePath . $route;

		return $this->client->delete($url, $headers, $body);
	}

	public function put($route, array $headers = array(), array $body = array())
	{
		$url = $this->client->servicePath . $this->servicePath . $route;

		return $this->client->put($url, $headers, $body);
	}
}
