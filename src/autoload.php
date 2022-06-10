<?php


class Autoload {
    public function __construct() {
        spl_autoload_extensions('.php');
        spl_autoload_register(array($this, 'load'));
    }

    private function load($className) {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $extension = spl_autoload_extensions();
        include_once (__DIR__ . '/' . $className . $extension);
    }
}

$init = new Autoload();