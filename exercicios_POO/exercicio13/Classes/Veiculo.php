<?php

namespace Classes;

Abstract Class Veiculo {
    protected string $placa;
    protected string $modelo;
    protected float $horaEntrada;

    public function __construct(string $placa, string $modelo, float $horaEntrada) {
        $this-> placa = $placa;
        $this-> modelo = $modelo;
        $this-> horaEntrada = $horaEntrada;
}
    public function getPlaca(): string{
        return $this-> placa;
}
    public function getModelo(): string{
        return $this-> modelo;
}

    public function getHoraEntrada(): float{
        return $this-> horaEntrada;
}

    abstract public function calcularValor(float $horaSaida): float;
}