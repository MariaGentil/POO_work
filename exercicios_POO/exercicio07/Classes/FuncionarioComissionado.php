<?php

namespace Classes;

    Class FuncionarioComissionado Extends Funcionario{

      private $salarioBase;
      private $totalVendas;
      private $percentualComissao;

    public function __construct($nome, $salarioBase, $totalVendas, $percentualComissao){
        $this-> nome = $nome;
        $this-> salarioBase = $salarioBase;
        $this-> totalVendas = $totalVendas;
        $this-> percentualComissao = $percentualComissao;
}
    public function calcularSalario(){
        return $this->salarioBase + ($this->totalVendas * ($this->percentualComissao / 100));
}
}