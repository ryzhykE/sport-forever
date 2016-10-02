<?php
/**
 * Created by PhpStorm.
 * User: Evgeniy
 * Date: 17.09.2016
 * Time: 9:28
 */

namespace App;


trait Singleton
{
    protected static $instance;

    private function __construct()
    {
    }
    public static function instasnce()
    {
        if(null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

}