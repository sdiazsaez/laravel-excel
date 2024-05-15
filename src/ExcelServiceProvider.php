<?php
namespace Technofelia\LaravelExcel;

use Technofelia\LaravelExcel\Factory\ExporterFactory;
use Technofelia\LaravelExcel\Factory\ImporterFactory;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ExcelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Exporter', \Technofelia\LaravelExcel\ExporterFacade::class);
        $loader->alias('Importer', \Technofelia\LaravelExcel\ImporterFacade::class);
    }

    public function register()
    {
        $this->app->singleton('cyber-duck/exporter', function () {
            return new ExporterFactory();
        });
        $this->app->singleton('cyber-duck/importer', function () {
            return new ImporterFactory();
        });
    }
}
