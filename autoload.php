<?php
/**
 * Created by PhpStorm.
 * User: Evgeniy
 * Date: 16.09.2016
 * Time: 11:33
 */

function __autoload($class_name) {


    include_once ($class_name.".php");
}

/**
function __autoload($class)
{
    require __DIR__ . '/' .str_replace('\\', '/', $class) . '.php';
}


// Добавление автозагрузок в очередь
// Первый способ регистрации автозагрузки с помощью имени функции
//spl_autoload_register('my_app_autoload');
// Второй способ неявной регистрации автозагрузки
spl_autoload_register(function($class) {
    $filename =  '/' . str_replace(['\\', 'App'], ['/', 'lib'], $class) . '.php';

    echo 1;
    if (file_exists($filename)) {
        include $filename;
    }
});
 */