<?php

namespace Moefar\InfluxDB\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use InfluxDB\Client as InfluxClient;
use InfluxDB\Database as InfluxDB;

class InfluxDBServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/InfluxDB.php' => config_path('influxdb.php')
        ]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InfluxDB::class, function($app) {
            $client = new InfluxClient(
                config('ifx_db.host'),
                config('ifx_db.port'),
                config('ifx_db.username'),
                config('ifx_db.password'),
                config('ifx_db.ssl'),
                config('ifx_db.verifySSL'),
                config('ifx_db.timeout')
            );
            return $client->selectDB(config('ifx_db.database'));
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            InfluxDB::class,
        ];
    }
}