<?php


// require './db/Database.php';

class Home extends Controller
{
    public static function showData()
    {

        $users = self::all();

        // echo 'home data';

        return ['users' => $users];
        // foreach ($data as $d) {
        //     echo $d['u_name'] . "</br>";
        // }

        // echo self::CreateView('index');
    }
}
