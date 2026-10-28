<?php

namespace Classes;

Class Carro Extends Veiculo{

    public function calcularValor(float $horaSaida): float {
        $horas = $horaSaida - $this-> horaEntrada;
        
        if ($horas <= 0){
            $horas = 1;
}
    return 10.0 + (($horas - 1) * 5);
}
}