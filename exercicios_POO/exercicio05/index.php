<?php

require_once __DIR__ . '/Requires/Requires.php';


$animais = [
    new Cachorro("Rex"),
    new Gato("Maomao"),
    new Vaca("Mimosa")
];

foreach ($animais as $animal){
    echo $animal-> emitirSom() . "\n";
}