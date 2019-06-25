<?php
$root = dirname(__DIR__);
$temp = $root . '/tmp';
return [
    // Slim settings
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,
    // Path settings
    'root' => $root,
    'temp' => $temp,
    'public' => $root . '/public',

    // View settings
    'twig' => [
        'path' => $root . '/templates',
        'cache_enabled' => false,
        'cache_path' => $temp . '/twig-cache'
    ],
    // Database settings
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'username' => 'root',
        'database' => 'test',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'flags' => [
            PDO::ATTR_PERSISTENT => false,
            // Enable exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Set default fetch mode
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ],
    ],
];