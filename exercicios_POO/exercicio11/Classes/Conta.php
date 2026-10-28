<?php

 Abstract Class Conta{

    private string $titular;
    protected float $saldo = 0;

    public function __construct(string $titular){
        $this-> titular = $titular;
}
    public function getTitular(): string{
        return $this->titular;
}
    public function getSaldo(): float{
        return $this->saldo;
}
    public function depositar(float $valor){
    if ($valor > 0) {
        $this-> saldo += $valor;
        return true;
}
    else{
        return false;
}
}
    public function sacar(float $valor){
    if ($valor > 0 && $this-> saldo >= $valor){
        $this-> saldo -= $valor;
        return true;
}
    else{
        return false;
}
}
    abstract public function calcularTarifaMensal(): float;
}