<?php

    spl_autoload_register('autoloader');

    function autoloader($className)
    {
        $dir = "classes/";
        $extension = ".class.php";
        $path = $dir.$className.$extension;

        if (!file_exists($path)) {
            return false;
        }

        include_once $path;
    }
