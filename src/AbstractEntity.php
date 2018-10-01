<?php

namespace AllDigitalRewards\Omni;

abstract class AbstractEntity
{
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            if ($this->isValidProperty($key)) {
                $setterName = $this->getSetter($key);
                $this->$setterName($value);
            }
        }
    }

    private function isValidProperty($propertyName)
    {
        if (method_exists($this, $this->getSetter($propertyName))) {
            return true;
        }

        return false;
    }

    private function getSetter($propertyName)
    {
        $setterName = str_ireplace("_", " ", $propertyName);
        $setterName = ucwords($setterName);
        $setterName = str_ireplace(" ", "", $setterName);

        return "set" . $setterName;
    }
}