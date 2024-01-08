<?php

class autoloader
{
    public static function registre()
    {
        spl_autoload_register(static function ($class) {
            $filename = $class . ".php";
            $filename = str_replace("\\", "/", $filename);
            if (file_exists($filename)) {
                require_once __DIR__ . '/' . $filename;
            }
        });
    }
}


?>