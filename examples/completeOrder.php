<?php
require __DIR__ . '/token_request.php';

//using order # from start_order.php ex.52177864
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