<?php

namespace Alldigitalrewards\Omni\Request;

use Alldigitalrewards\Omni\Response\AbstractEntity;

abstract class AbstractRequest extends AbstractEntity
{
    abstract public function getHttpMethod();

    abstract public function getUri();
}