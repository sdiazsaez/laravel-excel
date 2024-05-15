<?php

class ExcelServiceProviderTest extends TestCase
{
    public function test_service_provider()
    {
        //Test services
        $this->assertTrue($this->app->bound('technofelia/exporter'));
        $this->assertTrue($this->app->bound('technofelia/importer'));
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Factory\ExporterFactory::class,
            $this->app->make('technofelia/exporter')
        );
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Factory\ImporterFactory::class,
            $this->app->make('technofelia/importer')
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
