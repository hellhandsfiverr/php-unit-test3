<?php

namespace AllDigitalRewards\Omni\Request;

class AddFundsRequest extends AbstractRequest
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $payment_method;
    /**
     * @var string
     */
    private $token;

    /**
     * AddFundsRequest constructor.
     * @param int $id
     * @param float $amount
     * @param string $payment_method
     */
    public function __construct(int $id, float $amount, string $payment_method)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->payment_method = $payment_method;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'funds/add';
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'data[token]' => $this->token,
            'data[account_id]' => $this->id,
            'data[amount]' => $this->amount,
            'data[payment_method]' => $this->payment_method,
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
