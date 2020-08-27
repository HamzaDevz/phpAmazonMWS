<?php

$countries = ['fr', 'uk', 'it', 'es', 'de', 'tr'];

foreach ($countries as $country) {
    $store['amazonStore'.$country]['marketplaceId'] = config('services.amazon_mws.marketplace_id_'.$country);
    $store['amazonStore'.$country]['merchantId'] = config('services.amazon_mws.seller_id');
    $store['amazonStore'.$country]['keyId'] = config('services.amazon_mws.access_key_id');
    $store['amazonStore'.$country]['secretKey'] = config('services.amazon_mws.client_secret');
    $store['amazonStore'.$country]['MWSAuthToken'] = config('services.amazon_mws.auth_token');
    // $store['YourAmazonStore']['serviceUrl'] = '';
}

$AMAZON_SERVICE_URL = 'https://mws.amazonservices.co.uk/';

//Location of log file to use
$logpath = __DIR__.'/log.txt';

//Name of custom log function to use
$logfunction = '';

//Turn off normal logging
$muteLog = false;
