<?php

namespace AllDigitalRewards\Omni;

use AllDigitalRewards\Omni\Request\TokenRequest;

class RequestTokenTest extends AbstractClientSetup
{
    public function testTokenRequestReturnsTokenStringResponse()
    {
        // Setup our mock response body to return the JSON order response.
        $this->getMockResponse()
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($this->getResponse());

        $client = new Client(
            'API Username',
            'API Password',
            $this->getMockHttpClient()
        );

        $tokenRequest = new TokenRequest();
        $response = $client->requestToken($tokenRequest);

        $this->assertSame('sometoken', $response);
    }

    private function getResponse()
    {
        return json_encode([
            'response' => [
                'status' => 1000,
                'transaction_id' => '81980',
                'message' => 'sometoken'
            ]
        ]);
    }
}
