<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['POST', 'GET', 'OPTIONS', 'DELETE', 'PUT'],

    'allowed_origins' => ['https://eprescription.cepatsehat.com'],

    'allowed_origins_patterns' => ['~^https:\/\/.*\.cepatsehat\.com$~'],

    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'X-CSRF-Token'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
