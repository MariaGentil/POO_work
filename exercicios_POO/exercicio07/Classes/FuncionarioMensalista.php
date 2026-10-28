<?php

namespace Classes;

    Class FuncionarioMensalista Extends Funcionario{ 

        private $salarioFixo;

    public function __construct($nome, $salarioFixo){
        $this-> nome = $nome;
        $this-> salarioFixo = $salarioFixo;
}
    public function calcularSalario(){
        return $this-> salarioFixo;
}
}