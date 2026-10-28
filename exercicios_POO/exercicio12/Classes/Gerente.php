<?php
namespace classes;

Class Gerente Extends Funcionario Implements Bonificavel {
    
    public function calcularBonus(): float {
        return $this-> salario * 0.20;
}

    public function calcularSalario(): float {
        return $this-> salario + $this-> calcularBonus();
}
}