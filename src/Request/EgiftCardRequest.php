<?php

namespace AllDigitalRewards\Omni\Request;

use AllDigitalRewards\Omni\Exception\OmniException;

class EgiftCardRequest extends AbstractRequest
{
    private $uri;
    private $body;
    private $token;

    /**
     * @param int $cardId
     * @throws OmniException
     */
    public function getCard(int $cardId)
    {
        $this->uri = 'egiftCards/getCard';
        $this->body = [
            'data[card_id]' => $cardId
        ];
    }

    /**
     * @param int $cardId
     * @param int $cardNumber
     */
    public function getBalance(int $cardId, int $cardNumber)
    {
        $this->uri = 'egiftCards/getBalance';
        $this->body = [
            'data[card_id]' => $cardId,
            'data[card_number]' => $cardNumber
        ];
    }

    /**
     * @param int $orderId
     */
    public function getOrder(int $orderId)
    {
        $this->uri = 'orders/getOrder';
        $this->body = [
            'data[order_id]' => $orderId
        ];
    }

    public function getOrders()
    {
        $this->uri = 'orders/getOrders';
    }

    /**
     * @param string $merchant_code
     * @param string $merchant_template_id
     */
    public function startOrder(
        string $merchant_code,
        string $merchant_template_id
    ) {
        $this->uri = 'egiftOrders/start';
        $this->body = [
            'data[merchant_code]' => $merchant_code,
            'data[merchant_template_id]' => $merchant_template_id,
            'data[delivery]' => 'download',
            'data[contact][name]' => 'All Digital Rewards',
            'data[contact][email]' => 'jmuto@alldigitalrewards.com',
            'data[contact][organization]' => 'All Digital Rewards',
            'data[contact][phone]' => '',
        ];
    }

    /**
     * @param int $orderId
     * @param array $card
     */
    public function addCardOrder(
        int $orderId,
        array $card
    ) {
        $this->uri = 'egiftOrders/addCard';
        $this->body = [
            'data[order_id]' => $orderId,
            'data[card][first_name]' => $card['first_name'],
            'data[card][last_name]' => $card['last_name'],
            'data[card][denomination]' => $card['denomination'],
            'data[card][message]' => $card['message'],
            'data[card][email]' => '',
        ];
    }

    /**
     * @param int $orderId
     */
    public function completeOrder(int $orderId)
    {
        $this->uri = 'egiftOrders/complete';
        $this->body = [
            'data[order_id]' => $orderId,
            'data[options][digital_signature]' => 'Technology API',
            'data[options][payment_type]' => 'fundsbank',
            'data[options][account_id]' => 14632
        ];
    }

    /**
     * @param string $merchantCode
     */
    public function getCatalogProduct(string $merchantCode)
    {
        $this->uri = 'orderOptions/getMerchant';
        $this->body = [
            'data[merchant_code]' => $merchantCode
        ];
    }

    public function getCatalog()
    {
        $this->uri = 'orderOptions/getMerchants';
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        $this->body['data[token]'] = $this->token;

        return $this->body;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = $token;
    }
}
