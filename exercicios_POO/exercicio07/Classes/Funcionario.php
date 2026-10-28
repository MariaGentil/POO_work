<?php

namespace Classes;

    Abstract Class Funcionario{

    public function __construct(string $nome){
        $this-> nome = $nome;
}
    public function getNome(): string{
        return $this-> nome;
}
    Abstract public function CalcularSalario();
}