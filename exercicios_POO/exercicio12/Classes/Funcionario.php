<?php
namespace classes;

Abstract Class Funcionario {

    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario) {
        $this-> nome = $nome;
        $this-> salario = $salario;
}
    public function getNome(): string {
        return $this-> nome;
}
    public function calcularBonus(): float {
        return 0;
}
    abstract public function calcularSalario(): float;
}