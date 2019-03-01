<?php

namespace Core;

class DIContainer
{
    private static $container = [];

    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }

    private static function get($key)
    {
        return static::$container[$key];
    }

}