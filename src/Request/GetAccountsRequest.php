<?php

namespace AllDigitalRewards\Omni\Request;

class GetAccountsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $token;

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'funds/getAccounts';
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'data[token]' => $this->token
        ];
    }

    /**
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }
}
