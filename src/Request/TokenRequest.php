<?php

namespace AllDigitalRewards\Omni\Request;

class TokenRequest extends AbstractRequest
{
    private $userName;
    private $password;

    public function getUri()
    {
        return 'apiUsers/auth';
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
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
    public function getBody()
    {
        return [
            'data[username]' => $this->getUserName(),
            'data[password]' => $this->getPassword()
        ];
    }
}