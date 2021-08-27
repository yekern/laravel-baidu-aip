<?php


namespace Yekern\LaravelBaiduAipV2\facade;


use Illuminate\Support\Facades\Facade;

class AipNlp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipNlp';
    }
}
