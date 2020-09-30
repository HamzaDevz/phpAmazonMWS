<?php

$amazonConfigPerCountries = [
    'br' => [
        'marketplace' => 'A2Q3Y263D00KWC',
        'endpoint'    => 'https://mws.amazonservices.com',
    ],
    'ca' => [
        'marketplace' => 'A2EUQ1WTGCTBG2',
        'endpoint'    => 'https://mws.amazonservices.ca',
    ],
    'mx' => [
        'marketplace' => 'A1AM78C64UM0Y8',
        'endpoint'    => 'https://mws.amazonservices.com.mx',
    ],
    'us' => [
        'marketplace' => 'ATVPDKIKX0DER',
        'endpoint'    => 'https://mws.amazonservices.com',
    ],
    'ae' => [
        'marketplace' => 'A2VIGQ35RCS4UG',
        'endpoint'    => 'https://mws.amazonservices.ae',
    ],
    'de' => [
        'marketplace' => 'A1PA6795UKMFR9',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'eg' => [
        'marketplace' => 'ARBP9OOSHTCHU',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'es' => [
        'marketplace' => 'A1RKKUPIHCS9HS',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'fr' => [
        'marketplace' => 'A13V1IB3VIYZZH',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'gb' => [
        'marketplace' => 'A1F83G8C2ARO7P',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'in' => [
        'marketplace' => 'A21TJRUUN4KGV',
        'endpoint'    => 'https://mws.amazonservices.in',
    ],
    'it' => [
        'marketplace' => 'APJ6JRA9NG5V4',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'nl' => [
        'marketplace' => 'A1805IZSGTT6HS',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'sa' => [
        'marketplace' => 'A17E79C6D8DWNP',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'se' => [
        'marketplace' => 'A2NODRKZP88ZB9',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'tr' => [
        'marketplace' => 'A33AVAJ2PDY3EV',
        'endpoint'    => 'https://mws-eu.amazonservices.com',
    ],
    'sg' => [
        'marketplace' => 'A19VAU5U5O7RUS',
        'endpoint'    => 'https://mws-fe.amazonservices.com',
    ],
    'au' => [
        'marketplace' => 'A39IBJ37TRP1C6',
        'endpoint'    => 'https://mws.amazonservices.com.au',
    ],
    'jp' => [
        'marketplace' => 'A1VC38T7YXB528',
        'endpoint'    => 'https://mws.amazonservices.jp',
    ]
];

foreach ($amazonConfigPerCountries as $countryCode => $amazonConfigPerCountry)
{
    $store['amazonStore' . $countryCode]['marketplaceId'] = $amazonConfigPerCountry['marketplace'];
    $store['amazonStore' . $countryCode]['merchantId'] = config('services.amazon_mws.seller_id');
    $store['amazonStore' . $countryCode]['keyId'] = config('services.amazon_mws.access_key_id');
    $store['amazonStore' . $countryCode]['secretKey'] = config('services.amazon_mws.client_secret');
    $store['amazonStore' . $countryCode]['MWSAuthToken'] = config('services.amazon_mws.auth_token');
    $store['amazonStore' . $countryCode]['serviceUrl'] = $amazonConfigPerCountry['endpoint'];
}

$AMAZON_SERVICE_URL = 'https://mws.amazonservices.co.uk/';

//Location of log file to use
$logpath = __DIR__ . '/log.txt';

//Name of custom log function to use
$logfunction = '';

//Turn off normal logging
$muteLog = false;
