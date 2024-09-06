<?php

return [
  'paths' => ['api/*'], // Allow CORS only on API routes

  'allowed_methods' => ['*'], // Allow all HTTP methods (POST, GET, etc.)

  'allowed_origins' => ['https://eprescription.cepatsehat.com'], // Allow requests only from your front-end origin
  // 'allowed_origins' => ['http://localhost:3000'], // Allow requests only from your front-end origin

  'allowed_origins_patterns' => [], // Add patterns if you need wildcard origins

  'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Origin', 'Accept'], // Allow specific headers

  'exposed_headers' => [], // Expose headers if needed

  'max_age' => 0, // Cache duration for preflight requests

  'supports_credentials' => false, // If your request requires credentials (set to true if needed)
];
