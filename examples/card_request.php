<?php
require __DIR__ . '/token_request.php';

$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->getBalance(1, 12345666);
$response = $omni->egiftGetCardBalance($request);

print_r($response);