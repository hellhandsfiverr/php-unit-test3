<?php

namespace Alldigitalrewards\Omni;

use Alldigitalrewards\Omni\Exception\OmniException;
use Alldigitalrewards\Omni\Request\TokenRequest;
use Alldigitalrewards\Omni\Request\AbstractRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

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

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param TokenRequest $entity
     * @return mixed
     */
    public function requestToken(TokenRequest $entity)
    {
        $entity->setUserName($this->username);
        $entity->setPassword($this->password);

        $response = $this->dispatch($entity);
        $tokenObject = json_decode($response);
        $this->token = $tokenObject->message;
        return $tokenObject;
    }

    /**
     * @param AbstractRequest $entity
     * @return string
     * @throws OmniException
     */
    private function dispatch(AbstractRequest $entity)
    {
        $response = $this->httpClient->request(
            'POST',
            $entity->getUri() . '.json',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
                'body' => [
                    $entity->getBody()
                ]
            ]
        );

        $responseBody = (string)$response->getBody();

        if($this->getStatusCode($response) !== 1000){
            throw new OmniException(
                json_decode($responseBody)->error->message,
                json_decode($responseBody)->error->error_code,
                null
            );
        }

        return $responseBody;
    }

    /**
     * @param ResponseInterface $response
     * @return int
     */
    private function getStatusCode(ResponseInterface $response): int
    {
        $res = json_decode($response);

        return $res->status;
    }
}