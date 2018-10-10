<?php
require __DIR__ . '/token_request.php';

$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->getOrders();
$response = $omni->egiftGetOrders($request);

print_r($response);

/**
*
 * Response ex.
 *
 * Array
(
[0] => AllDigitalRewards\Omni\Response\EgiftGetOrderResponse Object
(
[id:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 52177864
[date_submitted:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
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
[digital_signature:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[signed_date:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[shipping_method:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[submitted_by:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[reloadable:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[payment_type:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[order_payment:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[order_card:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] =>
[type:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => virtual
[created:AllDigitalRewards\Omni\Response\EgiftGetOrderResponse:private] => 2018-10-10 12:50:50
)

)
 */