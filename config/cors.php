<?php

return [
    'paths' => ['api/*'],

    'allowed_methods' => ['*'], // Allow POST, OPTIONS, etc.

    'allowed_origins' => ['https://eprescription.cepatsehat.com'], // Set the frontend origin
 // 'allowed_origins' => ['http://localhost:3000'],
    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Origin', 'Accept'], // Allow Content-Type

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,
];
