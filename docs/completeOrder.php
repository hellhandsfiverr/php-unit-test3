<?php
require __DIR__ . '/token_request.php';

//Order Id #52177864
//Card Id #52852407

//Payment types: wire, check, fundsbank
$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->completeOrder(52177864, 'wire');
$response = $omni->egiftCompleteOrder($request);

print_r($response);

/**
 * Response
 * Array
(
[order_id] => 52177864
)
 */