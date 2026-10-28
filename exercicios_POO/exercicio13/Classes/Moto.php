<?php

namespace Classes;

Class Moto Extends Veiculo {
    
    public function calcularValor(float $horaSaida): float {
        $horas = $horaSaida - $this-> horaEntrada;
        
        if ($horas <= 0) {
            $horas = 1;
}
        return 6.0 + ($horas - 1) * 3;
}
}