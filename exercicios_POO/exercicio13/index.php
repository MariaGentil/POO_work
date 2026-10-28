<?php

require_once 'Requires/Requires.php';

use Classes\Estacionamento;
use Classes\Carro;
use Classes\Moto;


$estacionamento = new Estacionamento();

do {
    echo "1. Registrar Entrada\n";
    echo "2. Registrar Saída\n";
    echo "3. Listar Veículos\n";
    echo "4. Vagas Disponíveis\n";
    echo "0. Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao){
        case 1:
            $tipo = readline( "Tipo (1 para Carro, 2 para Moto): ");
            $placa =readline( "Placa: ");
            $modelo = readline( "Modelo: ");
            $entrada = readline( "Hora de entrada: ");

            if ($tipo == 1){
                $veiculo = new Carro($placa, $modelo, $entrada);
                $estacionamento-> entrar($veiculo);
}
             elseif ($tipo == 2){
                $veiculo = new Moto($placa, $modelo, $entrada);
                $estacionamento-> entrar($veiculo);
}
             else{
                echo "Tipo inválido!\n";
}
            break;

        case 2:
            $placa = readline( "Digite a placa do veículo que vai sair: ");
            $saida = readline("Digite a hora atual de saída: ");
            $estacionamento-> sair($placa, $saida);
            break;

        case 3:
            $estacionamento-> listar();
            break;

        case 4:
            echo "Vagas disponíveis: " . $estacionamento->vagasDisponiveis() . " de 10\n";
            break;

        case 0:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida!\n";
}
}
while ($opcao != 0);