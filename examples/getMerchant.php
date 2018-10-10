<?php
require __DIR__ . '/getMerchants.php';

$request = new \AllDigitalRewards\Omni\Request\EgiftCardRequest();
$request->getCatalogProduct('978');
$product = $omni->getEgiftCatalogProduct($request);
