<?php
require __DIR__ . '/bootstrap.php';

$request = new \Alldigitalrewards\Omni\Request\TokenRequest();

$response = $omni->requestToken($request);

print_r($response);