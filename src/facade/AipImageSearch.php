<?php


namespace Yekern\LaravelBaiduAipV2\facade;


use Illuminate\Support\Facades\Facade;

class AipImageSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipImageSearch';
    }
}
