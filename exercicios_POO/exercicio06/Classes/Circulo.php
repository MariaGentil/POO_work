<?php

class Circulo extends Forma{
    private float $raio;

    public function __construct(float $raio){
        $this-> raio = $raio;
}
    public function calcularArea(): float {
        return pi() * ($this-> raio ** 2);
}
    public function calcularPerimetro(): float {
        return 2 * pi() * $this-> raio;
}
}