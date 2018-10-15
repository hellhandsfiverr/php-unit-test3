<?php
require __DIR__ . '/token_request.php';

//using order # from start_order.php ex.52181625
$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$cardConfig = [
    'first_name' => 'Joe',
    'last_name' => 'Muto',
    'denomination' => 5.00,
    'message' => 'My Real Omni Order- Test'
];
$request->addCardOrder(52181625, $cardConfig);
$response = $omni->egiftAddCardToOrder($request);

print_r((array)$response);