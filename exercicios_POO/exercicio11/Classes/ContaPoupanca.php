<?php
require_once __DIR__ . '/Conta.php';

Class ContaPoupanca Extends Conta{

public function calcularTarifaMensal(): float{

    $this-> saldo += $this-> saldo * 0.005;
        $tarifa = 5.00;

    if ($this->saldo >= $tarifa) {
         $this->saldo -= $tarifa;
        return $tarifa;
} 
    else{
        $tarifaCobrada = $this-> saldo;
        $this-> saldo = 0;
        return $tarifaCobrada;
}
}
}