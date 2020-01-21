<?php


// namespace Database;
require "./vendor/autoload.php";

use Medoo\Medoo as con;
// require 'link.php';

class Database
{


    private static function link()
    {
        $db = new con([
            'database_type' => 'mysql',
            'database_name' => 'exchange',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
        return $db;
    }

    public static function all()
    {
        return self::link()->select('users', '*');
    }
}
