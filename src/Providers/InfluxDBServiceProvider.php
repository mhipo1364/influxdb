<?php
/**
 * Influx Database Service Provider For Laravel
 *
 * PHP version ~7.1
 *
 * @category ServiceProvider
 * @package  Moefar/InfluxDB/Providers
 * @author   Moe Far <moefar1985@gmail.com>
 * @license  <https://opensource.org/licenses/MIT> MIT
 * @link     <https://github.com/mhipo1364/influxdb/blob/master/src/Providers/InfluxDBServiceProvider.php>
 */
namespace Moefar\InfluxDB\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use InfluxDB\Client as IFXClient;
use InfluxDB\Database as IFXDatabase;

/**
 * Class InfluxDBServiceProvider
 *
 * @category ServiceProvider
 * @package  Moefar\InfluxDB\Providers
 * @author   Moe Far <moefar1985@gmail.com>
 */
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
        $this->publishes(
            [
            __DIR__ . '../../../config/InfluxDB.php' => config_path('influxdb.php')
            ]
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            IFXDatabase::class,
            function () {
                $client = new IFXClient(
                    config('ifx_db.host'),
                    config('ifx_db.port'),
                    config('ifx_db.username'),
                    config('ifx_db.password'),
                    config('ifx_db.ssl'),
                    config('ifx_db.verifySSL'),
                    config('ifx_db.timeout')
                );
                return $client->selectDB(config('ifx_db.database'));
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            IFXDatabase::class,
        ];
    }
}
