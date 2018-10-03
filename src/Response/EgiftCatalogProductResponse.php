<?php

namespace AllDigitalRewards\Omni\Response;

use AllDigitalRewards\Omni\AbstractEntity;

class EgiftCatalogProductResponse extends AbstractEntity
{
    private $code;
    private $name;
    private $min_denomination;
    private $max_denomination;
    private $denominations;
    private $templates;

    public function __construct($data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMinDenomination()
    {
        return $this->min_denomination;
    }

    /**
     * @param mixed $min_denomination
     */
    public function setMinDenomination($min_denomination)
    {
        $this->min_denomination = $min_denomination;
    }

    /**
     * @return mixed
     */
    public function getMaxDenomination()
    {
        return $this->max_denomination;
    }

    /**
     * @param mixed $max_denomination
     */
    public function setMaxDenomination($max_denomination)
    {
        $this->max_denomination = $max_denomination;
    }

    /**
     * @return mixed
     */
    public function getDenominations()
    {
        return $this->denominations;
    }

    /**
     * @param mixed $denominations
     */
    public function setDenominations($denominations)
    {
        $this->denominations = $denominations;
    }

    /**
     * @return array
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @param array $templates
     */
    public function setTemplates(array $templates)
    {
        if (!empty($templates)) {
            foreach ($templates as $template) {
                $this->templates[] = $template;
            }
            return;
        }
        $this->templates[] = $templates;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}
