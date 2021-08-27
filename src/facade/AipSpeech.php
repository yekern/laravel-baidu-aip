<?php


namespace Yekern\LaravelBaiduAipV2\facade;


use Illuminate\Support\Facades\Facade;

class AipSpeech extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AipSpeech';
    }
}
