<?php

return [
  'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define the routes that should allow CORS requests.

  'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, DELETE, etc.).

  'allowed_origins' => ['https://eprescription.cepatsehat.com', 'http://localhost:3000'], // Set the origin(s) allowed to make cross-origin requests.

  'allowed_origins_patterns' => [], // Leave this empty if you're using specific origins.

  'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Origin', 'Accept'], // Allow these headers.

  'exposed_headers' => [], // Headers you want to be exposed to the client.

  'max_age' => 0, // How long the results of a preflight request can be cached.

  'supports_credentials' => false, // Set to true if you need to include credentials like cookies in requests.
];

