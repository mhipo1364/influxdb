<?php
/**
 * Facade for influx db service provider
 *
 * PHP version ~7.1
 *
 * @category Facade
 * @package  Moefar/InfluxDB
 * @author   Moe Far <moefar1985@gmail.com>
 * @license  <https://opensource.org/licenses/MIT> MIT
 * @link     <https://github.com/mhipo1364/influxdb/blob/master/src/Facades/InfluxDB.php>
 */
namespace Moefar\InfluxDB\Facades;

use Illuminate\Support\Facades\Facade;
use InfluxDB\Database as IFXDatabase;

/**
 * Class InfluxDB
 *
 * @category Facade
 * @package  Moefar\InfluxDB\Facades
 * @author   Moe Far <moefar1985@gmail.com>
 */
class InfluxDB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return IFXDatabase::class;
    }
}
