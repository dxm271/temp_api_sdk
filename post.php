<?php

require_once '../vendor/autoload.php';

use ImageFIRST\Client;
use ImageFIRST\Service\Customer as CustomerService;

$servicePath = 'http://api.imagefirst.dev';

$c = new CustomerService(
	new Client($servicePath)
);
$users = $c->users->getPage(2);
var_dump($users);