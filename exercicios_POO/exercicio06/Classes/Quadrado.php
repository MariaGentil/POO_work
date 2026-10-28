<?php

class Quadrado extends Retangulo{
    private float $lado;

    public function __construct(float $lado){
        $this-> lado = $lado;
}
    public function calcularArea(): float {
        return $this-> lado * $this-> lado;
}
    public function calcularPerimetro(): float {
        return 4 * $this-> lado;
}
}