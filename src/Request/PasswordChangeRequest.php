<?php

namespace AllDigitalRewards\Omni\Request;

class PasswordChangeRequest extends AbstractRequest
{
    private $password;
    private $token;

    /**
     * PasswordChangeRequest constructor.
     * @param string $password
     */
    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public function getUri()
    {
        return 'apiUsers/passwd';
    }

    public function getBody()
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
