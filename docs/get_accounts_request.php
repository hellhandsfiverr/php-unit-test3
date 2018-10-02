<?php
require __DIR__ . '/bootstrap.php';

$request = new \AllDigitalRewards\Omni\Request\GetAccountsRequest();

$response = $omni->getAccount($request);

print_r($response);