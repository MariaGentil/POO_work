<?php

namespace Classes;

Class Estacionamento{

    private array $vagas = [];
    private int $limite = 10;

    public function vagasDisponiveis(): int{
        return $this-> limite - count($this-> vagas);
}

    public function entrar(Veiculo $veiculo): void {
        if (count($this-> vagas) >= $this-> limite) {
            echo "Estacionamento lotado!\n";
            return;
}
        foreach ($this-> vagas as $v){
            if ($v-> getPlaca() === $veiculo-> getPlaca()) {
                echo "Já existe um veículo com esta placa!\n";
                return;
}
}
                $this-> vagas[] = $veiculo;
                echo "Veículo estacionado com sucesso!\n";
}

    public function sair(string $placa, float $horaSaida): void {
        $encontrou = false;
        $novaLista = []; 

        foreach ($this-> vagas as $veiculo) {
            if ($veiculo-> getPlaca() === $placa) {
                $total = $veiculo-> calcularValor($horaSaida);
                $encontrou = true;
                echo "Saída registrada! Total a pagar: R$ " . $total . "\n";
}
            else{
                $novaLista[] = $veiculo;
}
}
        if ($encontrou === false) {
            echo "Erro: Veículo não encontrado.\n";
            return;
}
            $this->vagas = $novaLista;
}

    public function listar(): void{
        if ($this-> vagas == null){
            echo "O estacionamento está vazio.\n";
            return;
}

        foreach ($this-> vagas as $v){
            $tipo = get_class($v);
            echo "Tipo: {$tipo} | Placa: {$v->getPlaca()} | Modelo: {$v->getModelo()} | Entrada: {$v->getHoraEntrada()}h\n";
}
}
}