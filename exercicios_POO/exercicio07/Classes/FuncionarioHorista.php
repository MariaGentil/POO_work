<?php

namespace Classes;

    Class FuncionarioHorista Extends Funcionario{

        private $valorHora;
        private $horasTrabalhadas;

    public function __construct( $nome, $valorHora, $horasTrabalhadas){
        $this-> nome = $nome;
        $this-> valorHora = $valorHora;
        $this-> horasTrabalhadas = $horasTrabalhadas;
}
    public function calcularSalario(){
        return $this-> valorHora * $this-> horasTrabalhadas;
}
}