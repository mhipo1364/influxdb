# influxdb

This package is a `laravel` service provider for `influxDB`

## installation

Using composer:

    composer require mhipo1364/influxdb

After installation, you can publish vendor via this link to load package configs into your `config/influxdb.php` file:
    
    php artisan vendor:publish

##
Usage

First of all, you should add `InfluxDB` into your `aliases` in `config/app.php` file:

    ...
     'aliases' => [
        ...
        'InfluxDB' => Moefar\InfluxDB\Facades\InfluxDB::class,
        ...
    ],

Then, you can follow `influxdata/influxdb-php` package for working with database in your application:

### Read Data


