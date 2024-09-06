<?php

return [
  'paths' => ['api/*'], // Only allow CORS on API routes

  'allowed_methods' => ['*'], // Allow all methods (POST, GET, etc.), you can restrict this if needed

  'allowed_origins' => ['https://eprescription.cepatsehat.com'], // Your front-end origin

  'allowed_origins_patterns' => [],

  'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Origin', 'Accept'],

  'exposed_headers' => [],

  'max_age' => 0,

  'supports_credentials' => false,
];

