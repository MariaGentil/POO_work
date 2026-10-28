<?php
require_once __DIR__ . '/Conta.php';

Class ContaCorrente Extends Conta{

public function calcularTarifaMensal(): float{
    $tarifa = 15.00;
        
    if ($this-> saldo >= $tarifa) {
        $this-> saldo -= $tarifa;
        return $tarifa;
} 
    else{
        $tarifaCobrada = $this-> saldo;
        $this-> saldo = 0;
        return $tarifaCobrada;
}
}
}