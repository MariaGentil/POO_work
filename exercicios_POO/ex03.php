<?php

class Retangulo{
    private float $largura;
    private float $altura;

    public function __construct(float $largura, float $altura){
        $this-> largura = $largura;
        $this-> altura = $altura;
}

    public function calcularArea(): float{
        return $this-> largura * $this-> altura;
}
    public function calcularPerimetro(): float{
        return 2 * ($this-> largura + $this-> altura);
}
}
    $largura = readline("Insira a largura: ");
    $altura = readline("Insira a altura: ");

    $resultado = new Retangulo($largura, $altura);

    echo "Área: " . $resultado-> calcularArea() . "\n";
    echo "Perímetro: " . $resultado-> calcularPerimetro() . "\n";
