<?php

namespace AllDigitalRewards\Omni\Request;

class GetAccountRequest extends AbstractRequest
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $token;

    /**
     * GetAccountRequest constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'funds/getAccount';
    }

    /**
     * @return array
     */
    public function getBody(): array
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