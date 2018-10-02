<?php

namespace AllDigitalRewards\Omni\Response;

use AllDigitalRewards\Omni\AbstractEntity;

class EgiftGetOrderResponse extends AbstractEntity
{
    private $id;
    private $date_submitted;
    private $date_approved;
    private $date_processed;
    private $date_cancelled;
    private $date_shipped;
    private $total_amount;
    private $total_cards;
    private $total_codes;
    private $status;
    private $tracking_number;
    private $digital_signature;
    private $signed_date;
    private $shipping_method;
    private $submitted_by;
    private $reloadable;
    private $payment_type;
    private $order_payment;

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
    public function getDateSubmitted()
    {
        return $this->date_submitted;
    }

    /**
     * @param mixed $date_submitted
     */
    public function setDateSubmitted($date_submitted)
    {
        $this->date_submitted = $date_submitted;
    }

    /**
     * @return mixed
     */
    public function getDateApproved()
    {
        return $this->date_approved;
    }

    /**
     * @param mixed $date_approved
     */
    public function setDateApproved($date_approved)
    {
        $this->date_approved = $date_approved;
    }

    /**
     * @return mixed
     */
    public function getDateProcessed()
    {
        return $this->date_processed;
    }

    /**
     * @param mixed $date_processed
     */
    public function setDateProcessed($date_processed)
    {
        $this->date_processed = $date_processed;
    }

    /**
     * @return mixed
     */
    public function getDateCancelled()
    {
        return $this->date_cancelled;
    }

    /**
     * @param mixed $date_cancelled
     */
    public function setDateCancelled($date_cancelled)
    {
        $this->date_cancelled = $date_cancelled;
    }

    /**
     * @return mixed
     */
    public function getDateShipped()
    {
        return $this->date_shipped;
    }

    /**
     * @param mixed $date_shipped
     */
    public function setDateShipped($date_shipped)
    {
        $this->date_shipped = $date_shipped;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * @param mixed $total_amount
     */
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;
    }

    /**
     * @return mixed
     */
    public function getTotalCards()
    {
        return $this->total_cards;
    }

    /**
     * @param mixed $total_cards
     */
    public function setTotalCards($total_cards)
    {
        $this->total_cards = $total_cards;
    }

    /**
     * @return mixed
     */
    public function getTotalCodes()
    {
        return $this->total_codes;
    }

    /**
     * @param mixed $total_codes
     */
    public function setTotalCodes($total_codes)
    {
        $this->total_codes = $total_codes;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * @param mixed $tracking_number
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->tracking_number = $tracking_number;
    }

    /**
     * @return mixed
     */
    public function getDigitalSignature()
    {
        return $this->digital_signature;
    }

    /**
     * @param mixed $digital_signature
     */
    public function setDigitalSignature($digital_signature)
    {
        $this->digital_signature = $digital_signature;
    }

    /**
     * @return mixed
     */
    public function getSignedDate()
    {
        return $this->signed_date;
    }

    /**
     * @param mixed $signed_date
     */
    public function setSignedDate($signed_date)
    {
        $this->signed_date = $signed_date;
    }

    /**
     * @return mixed
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * @param mixed $shipping_method
     */
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;
    }

    /**
     * @return mixed
     */
    public function getSubmittedBy()
    {
        return $this->submitted_by;
    }

    /**
     * @param mixed $submitted_by
     */
    public function setSubmittedBy($submitted_by)
    {
        $this->submitted_by = $submitted_by;
    }

    /**
     * @return mixed
     */
    public function getReloadable()
    {
        return $this->reloadable;
    }

    /**
     * @param mixed $reloadable
     */
    public function setReloadable($reloadable)
    {
        $this->reloadable = $reloadable;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->payment_type = $payment_type;
    }

    /**
     * @return mixed
     */
    public function getOrderPayment()
    {
        return $this->order_payment;
    }

    /**
     * @param mixed $order_payment
     */
    public function setOrderPayment($order_payment)
    {
        $this->order_payment = $order_payment;
    }
}
