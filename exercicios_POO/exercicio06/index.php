<?php

require_once __DIR__ . '/Requires/Requires.php';

$formas = [];

    echo "--- Círculo ---\n";
    $raio = (float) readline("Digite o raio: ");
    $formas[] = new Circulo($raio);

    echo "\n--- Retângulo ---\n";
    $base = (float) readline("Digite a base: ");
    $altura = (float) readline("Digite a altura: ");
    $formas[] = new Retangulo($base, $altura);

    echo "\n--- Quadrado ---\n";
    $lado = (float) readline("Digite o lado: ");
    $formas[] = new Quadrado($lado);

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . " | Perímetro: " . $forma->calcularPerimetro() . "\n";
}