<?php

class ContaBancaria{
    private string $titular;
    private float $saldo = 0;

    public function __construct(string $titular){
        $this->titular = $titular;
}

    public function depositar(float $valor){
        if ($valor > 0){
            $this->saldo += $valor;
            echo "Depósito de {$valor} reais realizado!\n";
} 
        else{
            echo "Valor inválido.\n";
}
}
    public function sacar(float $valor){
        if ($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
            echo "Saque de {$valor} reais realizado!\n";
}   
        else {
            echo "Saque negado (saldo insuficiente ou inválido).\n";
}
}
    public function getTitular(){
        return $this->titular;
}
    public function getSaldo(){
        return $this->saldo;
}
}
    $nome = readline("Digite o nome do titular da conta: ");
    $conta = new ContaBancaria($nome);

    $deposito = (float) readline("Digite o valor para depositar: ");
    $conta->depositar($deposito);

    $valorSaque = (float) readline("Digite o valor para sacar: ");
    $conta->sacar($valorSaque);

    echo "Titular: " . $conta->getTitular() . "\n";
    echo "Saldo atual: R$ " . $conta->getSaldo() . "\n";