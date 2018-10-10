<?php

require __DIR__ . '/../vendor/autoload.php';

$username = 'technology@alldigitalrewards.com';
$password = '9m9k9Tx2$g!aV5XLV&$D';
$httpClient = new \GuzzleHttp\Client([
    'base_uri' => 'https://api.omnicard.com/2.x/',
    'http_errors' => false
]);

$omni = new \AllDigitalRewards\Omni\Client($username, $password, $httpClient);