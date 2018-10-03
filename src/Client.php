<?php

namespace AllDigitalRewards\Omni;

use AllDigitalRewards\Omni\Exception\OmniException;
use AllDigitalRewards\Omni\Request\EgiftCardRequest;
use AllDigitalRewards\Omni\Request\TokenRequest;
use AllDigitalRewards\Omni\Request\AbstractRequest;
use AllDigitalRewards\Omni\Response\EgiftCatalogProductResponse;
use AllDigitalRewards\Omni\Response\EgiftGetCardResponse;
use AllDigitalRewards\Omni\Response\EgiftGetOrderResponse;
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
     * @param EgiftCardRequest $entity
     * @return EgiftGetCardResponse
     */
    public function egiftGetCard(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        return new EgiftGetCardResponse($response['card']);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return mixed
     */
    public function egiftGetCardBalance(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        return $this->dispatch($entity);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return mixed
     */
    public function egiftLoadCard(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        return $this->dispatch($entity);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return EgiftGetOrderResponse
     */
    public function egiftGetOrder(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        return new EgiftGetOrderResponse($response['order']);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return array
     */
    public function egiftGetOrders(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);
        $orders = [];
        foreach ($response as $item) {
            $orders[] = new EgiftGetOrderResponse($item['order']);
        }

        return $orders;
    }

    /**
     * @param EgiftCardRequest $entity
     * @return mixed
     */
    public function egiftOrder(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        return $this->dispatch($entity);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return EgiftGetCardResponse
     */
    public function egiftAddToOrder(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        return new EgiftGetCardResponse($response['card']);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return mixed
     */
    public function egiftCompleteOrder(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        return $this->dispatch($entity);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return EgiftCatalogProductResponse
     */
    public function getEgiftCatalogProduct(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);

        return new EgiftCatalogProductResponse($response['merchant']);
    }

    /**
     * @param EgiftCardRequest $entity
     * @return array
     */
    public function getEgiftCatalogProducts(EgiftCardRequest $entity)
    {
        $entity->setToken($this->getToken());

        $response = $this->dispatch($entity);
        
        $products = [];
        foreach ($response as $item) {
            $products[] = new EgiftCatalogProductResponse($item['merchant']);
        }
        return $products;
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

        if ($this->responseBody['response']['status'] !== 1000) {
            throw new OmniException(
                $this->responseBody['response']['message']
            );
        }

        return $this->responseBody['response']['message'];
    }
}
