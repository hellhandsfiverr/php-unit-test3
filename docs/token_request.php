<?php
require __DIR__ . '/bootstrap.php';


$request = new \AllDigitalRewards\Omni\Request\TokenRequest();

$response = $omni->requestToken($request);

print_r($response);