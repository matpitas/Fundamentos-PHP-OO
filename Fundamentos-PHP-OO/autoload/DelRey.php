<?php

spl_autoload_register(function($class){
    if (file_exists($class.".php")) {
        require_once($class.".php");
    }
    if (file_exists("abstracts" . DIRECTORY_SEPARATOR . $class.".php")) {
        require_once("abstracts" . DIRECTORY_SEPARATOR . $class.".php");
    }
});

$DelRey = new Carro();
$DelRey->acelerar(80);

?>