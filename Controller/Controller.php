<?php

require './db/Database.php';
require './vendor/autoload.php';

class Controller extends Database
{

    private static function renderer()
    {
        $loader = new \Twig\Loader\FilesystemLoader('views');


        $twig = new \Twig\Environment($loader);

        $lexer = new Twig\Lexer($twig, array(
            'tag_block'    => array('{', '}'),
            'tag_variable' => array('{{', '}}')


        ));

        $twig->setLexer($lexer);
        return $twig;
    }

    public static function CreateView($viewname)
    {

        // require_once('./Views/' . $viewname . '.html');
        $data = static::showData();
        echo self::renderer()->render($viewname . ".html", ["data" => $data]);
    }
}
