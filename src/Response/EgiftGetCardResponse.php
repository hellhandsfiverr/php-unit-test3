<?php

namespace AllDigitalRewards\Omni\Response;

use AllDigitalRewards\Omni\AbstractEntity;

class EgiftGetCardResponse extends AbstractEntity
{
    private $id;
    private $recipient_email;
    private $recipient_name;
    private $balance;
    private $code;
    private $redemption_url;
    private $challenge_url;
    private $merchant_code;
    private $delivery;
    private $order;
    private $brand;
    private $redemption_details;

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
    public function getRecipientEmail()
    {
        return $this->recipient_email;
    }

    /**
     * @param mixed $recipient_email
     */
    public function setRecipientEmail($recipient_email)
    {
        $this->recipient_email = $recipient_email;
    }

    /**
     * @return mixed
     */
    public function getRecipientName()
    {
        return $this->recipient_name;
    }

    /**
     * @param mixed $recipient_name
     */
    public function setRecipientName($recipient_name)
    {
        $this->recipient_name = $recipient_name;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
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
    public function getRedemptionUrl()
    {
        return $this->redemption_url;
    }

    /**
     * @param mixed $redemption_url
     */
    public function setRedemptionUrl($redemption_url)
    {
        $this->redemption_url = $redemption_url;
    }

    /**
     * @return mixed
     */
    public function getChallengeUrl()
    {
        return $this->challenge_url;
    }

    /**
     * @param mixed $challenge_url
     */
    public function setChallengeUrl($challenge_url)
    {
        $this->challenge_url = $challenge_url;
    }

    /**
     * @return mixed
     */
    public function getMerchantCode()
    {
        return $this->merchant_code;
    }

    /**
     * @param mixed $merchant_code
     */
    public function setMerchantCode($merchant_code)
    {
        $this->merchant_code = $merchant_code;
    }

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param mixed $delivery
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getRedemptionDetails()
    {
        return $this->redemption_details;
    }

    /**
     * @param mixed $redemption_details
     */
    public function setRedemptionDetails($redemption_details)
    {
        $this->redemption_details = $redemption_details;
    }
}
