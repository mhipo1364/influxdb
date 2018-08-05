<?php
namespace Moefar\InfluxDB\Facades;

use Illuminate\Support\Facades\Facade;
use InfluxDB\Database as IFXDatabase;

class InfluxDB extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IFXDatabase::class;
    }
}