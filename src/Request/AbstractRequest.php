<?php

namespace Alldigitalrewards\Omni\Request;

use Alldigitalrewards\Omni\Response\AbstractEntity;

abstract class AbstractRequest extends AbstractEntity
{
    abstract public function getUri();
}