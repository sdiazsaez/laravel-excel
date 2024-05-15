<?php
namespace Technofelia\LaravelExcel\Contract;

interface ParserInterface
{
    public function transform($array, $header);
}
