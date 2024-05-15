<?php
namespace Technofelia\LaravelExcel\Contract;

interface SerialiserInterface
{
    public function getData($data);
    public function getHeaderRow();
}
