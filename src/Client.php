<?php

namespace Alldigitalrewards\Omni;

use GuzzleHttp\ClientInterface;

class Client
{
    private $username;
    private $password;
    private $httpClient;

    /**
     * Client constructor.
     * @param $username
     * @param $password
     * @param ClientInterface $httpClient
     */
    public function __construct($username, $password, ClientInterface $httpClient)
    {
        $this->username = $username;
        $this->password = $password;
        $this->httpClient = $httpClient;
    }
}