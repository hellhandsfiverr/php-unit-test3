<?php

namespace Alldigitalrewards\Omni\Request;


class TokenRequest extends AbstractRequest
{
    public function getUri()
    {
        return 'apiUsers/auth.json';
    }
}