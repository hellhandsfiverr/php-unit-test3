<?php

namespace AllDigitalRewards\Omni;

use Psr\Container\ContainerInterface;

class ClientFactory
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke()
    {
        $omniConfig = $this->container->get('omniConfig');

        $httpClient = new \GuzzleHttp\Client([
            'base_uri' => $omniConfig['endpoint'],
            'http_errors' => false
        ]);

        return new Client(
            $omniConfig['username'],
            $omniConfig['password'],
            $httpClient
        );
    }
}