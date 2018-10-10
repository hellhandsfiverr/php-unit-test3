<?php
require __DIR__ . '/token_request.php';

//using order #52177864
$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$cardConfig = [
    'first_name' => 'Joe',
    'last_name' => 'Muto',
    'denomination' => 5.00,
    'message' => 'My First Omni Order- Test'
];
$request->addCardOrder(52177864, $cardConfig);
$response = $omni->egiftAddCardToOrder($request);

print_r((array)$response);

/**
 * Response
 *
 * [ AllDigitalRewards\Omni\Response\EgiftGetCardResponse id] => 52852407
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse recipient_email] =>
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse recipient_name] => Joe Muto
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse balance] => 5
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse code] => 1fe1a3a1f2ccfd5af8c242f820d82f3b
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse redemption_url] => https://www.omnicard.com/eGifts/redeem/1fe1a3a1f2ccfd5af8c242f820d82f3b/c:
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse challenge_url] => https://www.omnicard.com/eGifts/redeem/1fe1a3a1f2ccfd5af8c242f820d82f3b
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse merchant_code] => 2115
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse delivery] => download
[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse order] => Array
(
[id] => 52177864
[purchase_date] =>
[status] => incomplete
)

[ AllDigitalRewards\Omni\Response\EgiftGetCardResponse brand] => Array
(
[id] => 171
[name] => Chili's
)
 */