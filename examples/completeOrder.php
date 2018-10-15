<?php
require __DIR__ . '/token_request.php';

//using order # from start_order.php ex.52181625
//Payment types: wire, check, fundsbank
$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->completeOrder(52181625);
$response = $omni->egiftCompleteOrder($request);

print_r($response);