<?php


namespace Yekern\LaravelBaiduAipV2\facade;


use Illuminate\Support\Facades\Facade;

class AipOcr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipOcr';
    }
}
