<?php

namespace AllDigitalRewards\Omni;

use AllDigitalRewards\Omni\Exception\OmniException;
use AllDigitalRewards\Omni\Request\GetAccountRequest;
use AllDigitalRewards\Omni\Request\PasswordChangeRequest;
use AllDigitalRewards\Omni\Request\TokenRequest;
use AllDigitalRewards\Omni\Request\AbstractRequest;
use AllDigitalRewards\Omni\Response\GetAccountResponse;
use GuzzleHttp\ClientInterface;

class Client
{
    private $username;
    private $password;
    private $httpClient;
    private $token;
    private $responseBody;

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
     * @return null|string
     */
    public function getToken(): ?string
    {
        return $this->token ?? null;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }

    /**
     * @param TokenRequest $entity
     * @return string
     */
    public function requestToken(TokenRequest $entity)
    {
        $entity->setUserName($this->username);
        $entity->setPassword($this->password);

        $this->dispatch($entity);

        $this->setToken($this->responseBody->response->message);

        return $this->responseBody->response->message;
    }

    /**
     * @param PasswordChangeRequest $entity
     * @return string
     */
    public function passwordChange(PasswordChangeRequest $entity)
    {
        $entity->setToken($this->getToken());

        $this->dispatch($entity);

        return $this->responseBody->response->message;
    }

    /**
     * @param GetAccountRequest $entity
     * @return GetAccountResponse
     */
    public function getAccount(GetAccountRequest $entity)
    {
        $entity->setToken($this->getToken());

        $this->dispatch($entity);

        return new GetAccountResponse((array)$this->responseBody->response->message);
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
                'form_params' => $entity->getBody()
            ]
        );

        $this->responseBody = json_decode((string)$response->getBody());

        if ($this->responseBody->response->status !== 1000) {
            throw new OmniException(
                $this->responseBody->response->message->errors[0]
            );
        }

        return $this->responseBody;
    }
}
