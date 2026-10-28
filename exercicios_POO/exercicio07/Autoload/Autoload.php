<?php

spl_autoload_register(function ($class){

    $path = str_replace('\\', '/', $class);
    $path = __DIR__ . '/../' . str_replace('POO', 'Classes',$path ). '.php';

    require_once $path;
});