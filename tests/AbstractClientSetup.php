<?php

namespace AllDigitalRewards\Omni;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use AllDigitalRewards\Omni\Mocks\Container;

class AbstractClientSetup extends TestCase
{
    protected $mockContainer;
    protected $mockHttpClient;
    protected $mockResponse;

    protected function getMockContainer()
    {
        if (!$this->mockContainer) {
            $this->mockContainer = $this
                ->getMockBuilder(Container::class)
                ->setMethods([])
                ->getMock();
        }

        return $this->mockContainer;
    }

    protected function getMockHttpClient()
    {
        if (!$this->mockHttpClient) {
            $this->mockHttpClient = $this
                ->getMockBuilder(\GuzzleHttp\Client::class)
                ->disableOriginalConstructor()
                ->setMethods([])
                ->getMock();

            $this->mockHttpClient
                ->expects($this->once())
                ->method('request')
                ->willReturn($this->getMockResponse());
        }

        return $this->mockHttpClient;
    }

    protected function getMockResponse()
    {
        if (!$this->mockResponse) {
            $this->mockResponse = $this
                ->getMockBuilder(Response::class)
                ->disableOriginalConstructor()
                ->setMethods([])
                ->getMock();
        }

        return $this->mockResponse;
    }
}
