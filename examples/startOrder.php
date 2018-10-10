<?php
require __DIR__ . '/token_request.php';

//Chili's eGift $5min $100max
//get First Template Id

$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->startOrder('978', '2115');
$response = $omni->egiftStartOrder($request);
print_r($response['order_id']);

/**
 * Response ex.
 *
 * Array
(
[order_id] => 52177864
)
 */