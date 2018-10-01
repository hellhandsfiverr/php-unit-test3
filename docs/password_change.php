<?php

require __DIR__ . '/bootstrap.php';

/**
 * minimum 8 characters must include 1 or more non-alphanumeric characters
 */
$request = new \AllDigitalRewards\Omni\Request\PasswordChangeRequest('password1');

$response = $omni->passwordChange($request);

print_r($response);