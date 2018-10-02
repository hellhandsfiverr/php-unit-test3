<?php
require __DIR__ . '/bootstrap.php';

/** PaymentMethod options are check or wire */

$request = new \AllDigitalRewards\Omni\Request\AddFundsRequest(
    1,
    100.00,
    'wire'
);

$response = $omni->addFunds($request);

print_r($response);