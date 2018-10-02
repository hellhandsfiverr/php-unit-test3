<?php

namespace AllDigitalRewards\Omni\Request;

class TokenRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $token;

    /**
     * @return string
     */
    public function getUri(): string
    {
        return 'apiUsers/auth';
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'data[username]' => $this->getUserName(),
            'data[password]' => $this->getPassword()
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
