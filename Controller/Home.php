<?php


// require './db/Database.php';

class Home extends Controller
{
    public static function showData()
    {
        $data = self::all();
        echo 'home data';
        return $data;
        // foreach ($data as $d) {
        //     echo $d['u_name'] . "</br>";
        // }

        // echo self::CreateView('index');
    }
}
