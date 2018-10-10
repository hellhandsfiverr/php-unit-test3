<?php
require __DIR__ . '/token_request.php';

//Order #52177864
$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->getOrder(52177864);
$response = $omni->egiftGetOrder($request);

print_r($response);

/**
 * Response ex.
 *
 * AllDigitalRewards\Omni\Response\EgiftGetOrderResponse Object
(
[id:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 52177864
[date_submitted:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 2018-10-10 13:22:40
[date_approved:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[date_verified:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[date_processed:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[date_cancelled:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[date_shipped:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[total_amount:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 4.69
[total_cards:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 1
[total_codes:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 0
[status:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => submitted
[tracking_number:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[digital_signature:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => Technology API
[signed_date:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 2018-10-10 13:22:40
[shipping_method:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => Download by Purchaser
[submitted_by:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => Technology API
[reloadable:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 0
[payment_type:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => Wire
[order_payment:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => Array
(
)

[order_card:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => Array
(
[0] => Array
(
[total_cards] => 1
[card_style] => 2115
[card_type] => Chili's eGift
[cards] => Array
(
[0] => Array
(
[id] => 52852407
[denomination] => 5
[first_name] => Joe
[last_name] => Muto
)

)

)

)

[type:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => virtual
[created:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
)
 */