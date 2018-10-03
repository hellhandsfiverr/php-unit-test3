<?php

namespace AllDigitalRewards\Omni\Request;

class EgiftCardRequest extends AbstractRequest
{
    private $uri;
    private $body;
    private $token;

    /**
     * @param int $cardId
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
     * @param int $cardId
     * @param string $email
     */
    public function sendEmail(int $cardId, string $email = '')
    {
        $this->uri = 'egiftCards/sendEmail';
        $this->body = [
            'data[card_id]' => $cardId
        ];
        if (!empty($email)) {
            $this->body['data[email]'] = $email;
        }
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
     * @param int $cardId
     * @param int $cardNumber
     * @param float $amount
     * @param string $paymentMethod
     * @param int|null $accountId
     */
    public function loadCard(
        int $cardId,
        int $cardNumber,
        float $amount,
        string $paymentMethod,
        int $accountId = null
    ) {
        $this->uri = 'cards/load';
        $this->body = [
            'data[card_id]' => $cardId,
            'data[card_number]' => $cardNumber,
            'data[amount]' => $amount,
            'data[payment_method]' => $paymentMethod,
        ];
        if (!is_null($accountId)) {
            $this->body['data[account_id]'] = $accountId;
        }
    }

    /**
     * @param string $merchant_code
     * @param string $merchant_template_id
     * @param array $contact
     */
    public function order(
        string $merchant_code,
        string $merchant_template_id,
        array $contact
    ) {
        $this->uri = 'egiftOrders/start';
        $this->body = [
            'data[merchant_code]' => $merchant_code,
            'data[merchant_template_id]' => $merchant_template_id,
            'data[delivery]' => 'download',
            'data[contact][name]' => $contact['name'],
            'data[contact][email]' => $contact['email'],
            'data[contact][organization]' => $contact['organization'],
            'data[contact][phone]' => $contact['phone'] ?? '',
        ];
    }

    /**
     * @param int $orderId
     * @param array $card
     */
    public function addToOrder(
        int $orderId,
        array $card
    ) {
        $this->uri = 'egiftOrders/start';
        $this->body = [
            'data[order_id]' => $orderId,
            'data[card][first_name]' => $card['first_name'],
            'data[card][last_name]' => $card['last_name'],
            'data[card][denomination]' => (float)$card['denomination'],
            'data[card][message]' => $card['message'],
            'data[card][email]' => $card['email'] ?? '',
        ];
    }

    /**
     * @param int $orderId
     * @param array $options
     */
    public function completeOrder(int $orderId, array $options)
    {
        $this->uri = 'egiftOrders/complete';
        $this->body = [
            'data[order_id]' => $orderId,
            'data[options][digital_signature]' => $options['digital_signature'],
            'data[options][payment_type]' => $options['payment_type'],
            'data[options][account_id]' => (int)$options['account_id'],
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
