<?php


namespace Yekern\LaravelBaiduAipV2\facade;


use Illuminate\Support\Facades\Facade;

class AipImageProcess extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipImageProcess';
    }
}
