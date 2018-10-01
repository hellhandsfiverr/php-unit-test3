<?php
require __DIR__ . '/bootstrap.php';

$request = new \AllDigitalRewards\Omni\Request\GetAccountRequest(1);

$response = $omni->getAccount($request);

print_r($response);