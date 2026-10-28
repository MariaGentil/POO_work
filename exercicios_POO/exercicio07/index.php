<?php

require_once __DIR__ . '/Autoload/Autoload.php';

use Classes\FuncionarioHorista;
use Classes\FuncionarioMensalista;
use Classes\FuncionarioComissionado;

$funcionarios = [];
 
echo "--- Horista ---\n";
$nomeH = readline("Nome: ");
$valorH = readline("Valor da hora: ");
$horasH = readline("Horas trabalhadas: ");
$funcionarios[] = new FuncionarioHorista($nomeH, $valorH, $horasH);

echo "\n--- Mensalista ---\n";
$nomeM = readline("Nome: ");
$salarioM = readline("Salário fixo: ");
$funcionarios[] = new FuncionarioMensalista($nomeM, $salarioM);

echo "\n--- Comissionado ---\n";
$nomeC = readline("Nome: ");
$baseC = readline("Salário base: ");
$vendasC = readline("Total de vendas: ");
$comissaoC = readline("Percentual de comissão: ");
$funcionarios[] = new FuncionarioComissionado($nomeC, $baseC, $vendasC, $comissaoC);

foreach ($funcionarios as $func) {
    echo "Nome: " . $func->getNome() . " | Salário: R$ " . $func->calcularSalario() . "\n";
}