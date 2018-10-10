<?php
require __DIR__ . '/token_request.php';

$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->getCatalog();
$response = $omni->getEgiftCatalogProducts($request);

$products = $response;

