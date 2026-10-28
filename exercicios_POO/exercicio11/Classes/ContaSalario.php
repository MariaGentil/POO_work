<?php

require_once __DIR__ . '/Conta.php';

Class ContaSalario Extends Conta{

    private int $saquesRealizados = 0;

    public function sacar(float $valor){

    if ($this-> saquesRealizados >= 5){
        echo "Limite de 5 saques mensais atingido.";
}
    if ($valor > 0 && $this-> saldo >= $valor){
        $this-> saldo -= $valor;
        $this-> saquesRealizados++;
        return "saque realizado!";
}
    else{
        return "não foi possivel realizar o saque.";
}
}
    public function calcularTarifaMensal(): float{
        $this-> saquesRealizados = 0; 
        return 0;
}
}