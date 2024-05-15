<?php

class ExcelServiceProviderTest extends TestCase
{
    public function test_service_provider()
    {
        //Test services
        $this->assertTrue($this->app->bound('cyber-duck/exporter'));
        $this->assertTrue($this->app->bound('cyber-duck/importer'));
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Factory\ExporterFactory::class,
            $this->app->make('cyber-duck/exporter')
        );
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Factory\ImporterFactory::class,
            $this->app->make('cyber-duck/importer')
        );
        //Test aliases
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Exporter\AbstractSpreadsheet::class,
            Exporter::make("Excel")
        );
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Importer\AbstractSpreadsheet::class,
            Importer::make("Excel")
        );
    }
}
