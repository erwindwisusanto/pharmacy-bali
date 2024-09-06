<?php

return [
  'paths' => ['api/*', 'sanctum/csrf-cookie'],

  'allowed_methods' => ['*'],  // Allow all HTTP methods (GET, POST, OPTIONS, etc.)

  'allowed_origins' => ['*'],  // Allow requests from any origin

  'allowed_headers' => ['*'],  // Allow any headers

  'exposed_headers' => [],

  'max_age' => 0,

  'supports_credentials' => false,  // Set to true if cookies or credentials are required
];
