<?php

namespace Alldigitalrewards\Omni;

use Alldigitalrewards\Omni\Exception\OmniException;
use GuzzleHttp\ClientInterface;

class Client
{
    private $username;
    private $password;
    private $httpClient;
    private $token;

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

    public function getToken()
    {
        return $this->token;
    }

    public function requestToken()
    {
        //$reponse =
    }

    private function dispatch(Request\AbstractRequest $entity)
    {
        $response = $this->httpClient->request(
            $entity->getHttpMethod(),
            $entity->getUri(),
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ],
                'auth' => [$this->username, $this->password],
                'body' => json_encode($entity)
            ]
        );

        $responseBody = (string)$response->getBody();

        if($response->getStatusCode() !== 200){
            throw new OmniException(
                json_decode($responseBody)->error->message,
                json_decode($responseBody)->error->error_code,
                null
            );
        }

        return $responseBody;
    }
}