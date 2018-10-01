<?php

require __DIR__ . '/../vendor/autoload.php';

$username = 'alldigrewAPIUser';
$password = 'k@K@FBJezPZ9J$2f';
$httpClient = new \GuzzleHttp\Client([
    'base_uri' => 'https://api.omnicard.com/2.x/',
    'http_errors' => false
]);

$omni = new \AllDigitalRewards\Omni\Client($username, $password, $httpClient);