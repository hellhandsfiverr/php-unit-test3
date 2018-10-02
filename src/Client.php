<?php

namespace AllDigitalRewards\Omni;

use AllDigitalRewards\Omni\Exception\OmniException;
use AllDigitalRewards\Omni\Request\AddFundsRequest;
use AllDigitalRewards\Omni\Request\GetAccountRequest;
use AllDigitalRewards\Omni\Request\GetAccountsRequest;
use AllDigitalRewards\Omni\Request\PasswordChangeRequest;
use AllDigitalRewards\Omni\Request\TokenRequest;
use AllDigitalRewards\Omni\Request\AbstractRequest;
use AllDigitalRewards\Omni\Response\AddFundsResponse;
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

        $response = $this->dispatch($entity);

        $this->setToken($response);

        return $response;
    }

    /**
     * @param PasswordChangeRequest $entity
     * @return string
     */
    public function passwordChange(PasswordChangeRequest $entity)
    {
        $entity->setToken($this->getToken());

        return $this->dispatch($entity);
    }

    /**
     * @param GetAccountRequest $entity
     * @return GetAccountResponse
     */
    public function getAccount(GetAccountRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        return new GetAccountResponse($response->account);
    }

    /**
     * @param GetAccountsRequest $entity
     * @return array
     */
    public function getAccounts(GetAccountsRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        $accounts = [];
        foreach ($response as $item) {
            $accounts[] = new GetAccountResponse($item->account);
        }
        return $accounts;
    }

    /**
     * @param AddFundsRequest $entity
     * @return AddFundsResponse
     */
    public function addFunds(AddFundsRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        return new AddFundsResponse($response->funds_account_transaction);
    }

    /**
     * @param AbstractRequest $entity
     * @return mixed
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

        $this->responseBody = json_decode((string)$response->getBody(), true);

        if ($this->responseBody->response->status !== 1000) {
            throw new OmniException(
                $this->responseBody->response->message->errors[0]
            );
        }

        return $this->responseBody->response->message;
    }
}
