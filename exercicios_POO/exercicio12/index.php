<?php

require_once 'autoload/Autoload.php';
Use classes\Estagiario;
Use classes\Gerente;


$funcionarios = [];

echo "\n--- Cadastro de Gerente ---\n";
$nomeGerente = readline("Digite o nome do gerente: ");
$salarioGerente = readline("Digite o salário base do gerente: ");

$funcionarios[] = new Gerente($nomeGerente, $salarioGerente);

echo "\n--- Cadastro de Estagiário ---\n";
$nomeEstagiario = readline("Digite o nome do estagiário: ");
$salarioEstagiario = readline("Digite o salário base do estagiário: ");

$funcionarios[] = new Estagiario($nomeEstagiario, $salarioEstagiario);

foreach ($funcionarios as $funcionario) {
    echo "Nome: " . $funcionario-> getNome() . "\n";
    echo "Salário Final: R$ " . number_format($funcionario-> calcularSalario(), 2, ',', '.') . "\n";

    $bonus = $funcionario-> calcularBonus();
    if ($bonus > 0) {
        echo "Bônus: R$ " . number_format($bonus, 2, ',', '.') . "\n";
} 
    else{
        echo "Bônus: Não se aplica a este cargo.\n";
}
}