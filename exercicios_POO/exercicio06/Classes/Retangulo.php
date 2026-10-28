<?php

class Retangulo extends Forma{
    protected float $base;
    protected float $altura;

    public function __construct(float $base, float $altura) {
        $this-> base = $base;
        $this-> altura = $altura;
}
    public function calcularArea(): float {
        return $this-> base * $this-> altura;
}
    public function calcularPerimetro(): float {
        return 2 * ($this-> base + $this-> altura);
}
}