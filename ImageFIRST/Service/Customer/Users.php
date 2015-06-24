<?php

namespace ImageFIRST\Service\Customer;

use ImageFIRST\Service\Customer;

class Users
{
	protected $customer;

	public $route;

	public function __construct(Customer $customer)
	{
		$this->route = '/users';
		$this->customer = $customer;
	}

	public function getPage($page = 1, $asJson = true)
	{
		$parameters = array(
			'page' => $page,
		);

		$url = $this->route;
		$response = $this->customer->get($url, array(), $parameters);

		return $this->getResponseBody($response, $asJson);
	}

	public function getUserById($userId = -1, $asJson = true)
	{
		if ($userId >= 0) {
			$url = $this->route . '/' . $userId;
			$response = $this->customer->get($url);

			return $this->getResponseBody($response, $asJson);
		} else {
			return null;
		}
	}

	public function getUserByName($userName, $asJson = true)
	{
		$url = $this->route . '?query=' . $userName;
		$response = $this->customer->get($url);
		return $this->getResponseBody($response, $asJson);
	}

	public function getAuthenticatedUser($username, $password, $asJson = true)
	{
		$parameters = array(
			'username' => $username,
			'password' => $password
		);

		$url = $this->route . '/authenticate';
		$response = $this->customer->get($url, array(), $parameters);
		return $this->getResponseBody($response, $asJson);
	}

	protected function getResponseBody($response, $asJson = true)
	{
		if ($asJson) {
			return $response->raw_body;
		} else {
			return $response->body;
		}
	}
}
