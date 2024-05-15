<?php

class ExporterFacadeTest extends TestCase
{
    public function test_facades_are_available()
    {
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Factory\ExporterFactory::class,
            Exporter::getFacadeRoot()
        );
        $this->assertInstanceOf(
            \Technofelia\LaravelExcel\Factory\ImporterFactory::class,
            Importer::getFacadeRoot()
        );
    }
}
