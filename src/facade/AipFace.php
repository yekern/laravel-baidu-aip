<?php
namespace Yekern\LaravelBaiduAipV2\facade;

use Illuminate\Support\Facades\Facade;

class AipFace extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipFace';
    }
}
