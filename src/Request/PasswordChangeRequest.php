<?php

namespace AllDigitalRewards\Omni\Request;

class PasswordChangeRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $token;

    /**
     * PasswordChangeRequest constructor.
     * @param string $password
     */
    public function __construct(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'apiUsers/passwd';
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'data[token]' => $this->token,
            'data[password]' => $this->password,
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
