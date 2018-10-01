<?php

namespace AllDigitalRewards\Omni\Request;

use AllDigitalRewards\Omni\AbstractEntity;

abstract class AbstractRequest extends AbstractEntity
{
    abstract public function getUri();
    abstract public function getBody();
}