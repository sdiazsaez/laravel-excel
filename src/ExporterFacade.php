<?php
namespace Technofelia\LaravelExcel;

use Illuminate\Support\Facades\Facade;

class ExporterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cyber-duck/exporter';
    }
}
