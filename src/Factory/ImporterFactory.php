<?php
namespace Technofelia\LaravelExcel\Factory;

use ReflectionClass;

class ImporterFactory
{
    public function make($type)
    {
        $class = new ReflectionClass('Technofelia\\LaravelExcel\\Importer\\'.$type);
        return $class->newInstanceArgs(array());
    }
}
