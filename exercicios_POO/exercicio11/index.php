<?php
require_once __DIR__ . '/requires/Requires.php';

$contas = [];

while (true) {
    echo "1. Criar Conta\n";
    echo "2. Depositar\n";
    echo "3. Sacar\n";
    echo "4. Aplicar Tarifas\n";
    echo "5. Acessar Conta e Saldo\n";
    echo "0. Sair\n";
    
    $opcao = readline("Escolha uma das opções: ");

    switch ($opcao) {
        case '1':
            $nome = readline("Nome do titular: ");
            echo "\n 1-Corrente \n 2-Poupança \n 3-Salário \n Escolha: ";
            $tipo = readline();

            if ($tipo == '1'){
                $contas[] = new ContaCorrente($nome);
} 
            elseif ($tipo == '2'){
                $contas[] = new ContaPoupanca($nome);
} 
            elseif ($tipo == '3'){
                $contas[] = new ContaSalario($nome);
} 
            else{
                echo "Tipo inválido!\n";
                break;
}
                echo "Conta criada com ID: " .(count($contas) -1 ) . "\n";
                break;

        case '2':
            $id = readline("ID da conta: ");
            if (!$contas[$id]){
                echo "Conta não encontrada.\n";
                break;
}
            
            $valor = readline("Valor para depositar: ");
            if ($contas[$id]-> depositar($valor)){
                echo "Depósito feito!\n";
} 
            else{
                echo "Valor inválido.\n";
}
            break;

        case '3':
            $id = readline("ID da conta: ");
            if (!$contas[$id]) {
                echo "Conta não encontrada.\n";
                break;
}
            $valor = readline("Valor para sacar: ");
            if ($contas[$id]-> sacar($valor)) {
                echo "Saque feito!\n";
}   
            else {
                echo "Saldo insuficiente.\n";
}
            break;

        case '4':
            if (empty($contas)){
                echo "Nenhuma conta cadastrada.\n";
            break;
}
            foreach ($contas as $c){
                $c-> calcularTarifaMensal();
}
                echo "Tarifas aplicadas!\n";
            break;

        case '5':
            if (empty($contas)) {
                echo "Nenhuma conta cadastrada.\n";
            break;
}
            foreach ($contas as $id => $c) {
                echo "ID: {$id} | Titular: {$c-> getTitular()} | Tipo: " . get_class($c) . " Saldo: R$ {$c->getSaldo()}\n";
}
            break;

        case '0':
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida!\n";
            break;
}
}