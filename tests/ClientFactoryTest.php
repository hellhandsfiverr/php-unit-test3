<?php

namespace AllDigitalRewards\Omni;

class ClientFactoryTest extends AbstractClientSetup
{
    public function testReturnsClient()
    {
        $this->getMockContainer()
            ->expects($this->once())
            ->method('get')
            ->with('omniConfig')
            ->willReturn([
                'username' => 'API Username',
                'password' => 'API Password',
                'endpoint' => 'https://api.omnicard.com/2.x/'
            ]);

        $clientFactory = new ClientFactory($this->getMockContainer());

        $this->assertInstanceOf(Client::class, $clientFactory());
    }
}
