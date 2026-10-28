<?php

class Pessoa {
    private string $nome;
    private int $idade;

    public function getNome(): string{
        return $this->nome;
}
    public function setNome(string $nome): void{
        $this->nome = trim($nome);
}
    public function getIdade(): int{
        return $this->idade;
}
    public function setIdade(int $idade): void {
        if ($idade < 0) {
            echo "A idade não pode ser um valor negativo!\n";
} 
        else{
            $this->idade = $idade;
}}
    public function apresentar(): void {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.\n";
}}

    $nomeDigitado = readline("Digite o seu nome: ");
    $idadeDigitada = (int) readline("Digite a sua idade: ");

    $pessoa = new Pessoa();
    $pessoa->setNome($nomeDigitado);
    $pessoa->setIdade($idadeDigitada);

    if ($idadeDigitada >= 0){
        echo "\n";
    $pessoa->apresentar();
}