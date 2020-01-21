<?php


require_once 'Routes.php';

// echo __DIR__;

function __autoload($classname)
{
    if (file_exists("./autoload/" . $classname . '.php')) {
        require "./autoload/" . $classname . '.php';
    } else if (file_exists("./Controller/" . $classname . '.php')) {
        require "./Controller/" . $classname . '.php';
    } else if (file_exists("./db/" . $classname . '.php')) {
        require "./db/" . $classname . '.php';
    }
}
