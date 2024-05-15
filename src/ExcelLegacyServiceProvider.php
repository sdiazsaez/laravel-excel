<?php
namespace Technofelia\LaravelExcel;

use Technofelia\LaravelExcel\Factory\ExporterFactory;
use Technofelia\LaravelExcel\Factory\ImporterFactory;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ExcelLegacyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Exporter', '\Technofelia\LaravelExcel\ExporterFacade');
        $loader->alias('Importer', '\Technofelia\LaravelExcel\ImporterFacade');
    }

    public function register()
    {
        $this->app->bind('technofelia/exporter', function () {
            return new ExporterFactory();
        });
        $this->app->bind('technofelia/importer', function () {
            return new ImporterFactory();
        });
    }
}
