<?php

require_once '../vendor/autoload.php';

use ImageFIRST\Client;
use ImageFIRST\Service\Customer as CustomerService;

$servicePath = 'http://api-local-dev.imagefirst.com/';

$c = new CustomerService(
	new Client($servicePath)
);

// $users = $c->users->getPage(2);
// var_dump($users);

// $userId = 124;
// $user = $c->users->getUser($userId);
// var_dump($user);
//
// $userId = 10000;
// $user = $c->users->getUser($userId);
// var_dump($user);

$username='bbins1';
$pw = 'IMAGEFIRST';
echo "in get test...\n";
var_dump($c->users->getAuthenticatedUser($username, $pw));
