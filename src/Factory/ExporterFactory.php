<?php
namespace Technofelia\LaravelExcel\Factory;

use ReflectionClass;

class ExporterFactory
{
    public function make($type)
    {
        $class = new ReflectionClass('Technofelia\\LaravelExcel\\Exporter\\'.$type);
        return $class->newInstanceArgs(array());
    }
}
