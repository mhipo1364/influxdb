<?php
/**
 * Config for influxDB broker
 *
 * @author Moe Far <moefar1985@gmail.com>
 */

return [
    'host' => env('_IFX_HOST', 'localhost'),
    'database' => env('_IFX_DATABASE', ''),
    'user' => env('_IFX_USER', ''),
    'pass' => env('_IFX_PASS', ''),
    'port' => env('_IFX_PORT', 8086),
    'timeout' => env('_IFX_TIMEOUT', 0),
    'connection_timeout' => env('_IFX_CONNECTION_TIMEOUT', 0),
    'ssl' => env('_IFX_SSL', false),
    'verify_ssl' => env('_IFX_VERIFY_SSL', false),
];
