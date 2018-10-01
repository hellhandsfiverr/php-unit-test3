<?php

namespace AllDigitalRewards\Omni\Request;

class GetAccountRequest extends AbstractRequest
{
    private $id;
    private $token;

    /**
     * GetAccountRequest constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getUri()
    {
        return 'funds/getAccount';
    }

    public function getBody()
    {
        return [
            'data[token]' => $this->token,
            'data[account_id]' => $this->id,
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
