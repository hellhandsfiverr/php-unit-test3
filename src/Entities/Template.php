<?php

namespace AllDigitalRewards\Omni\Entities;

use AllDigitalRewards\Omni\AbstractEntity;

class Template extends AbstractEntity
{
    private $id;
    private $text_color;
    private $preview_url;

    public function __construct($data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTextColor()
    {
        return $this->text_color;
    }

    /**
     * @param mixed $text_color
     */
    public function setTextColor($text_color)
    {
        $this->text_color = $text_color;
    }

    /**
     * @return mixed
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

    /**
     * @param mixed $preview_url
     */
    public function setPreviewUrl($preview_url)
    {
        $this->preview_url = $preview_url;
    }
}