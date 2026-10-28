<?php

class Animal{

    protected string $nome;

    public function __construct(string $nome){
        $this->nome = $nome;
}
    public function emitirSom(): string {
        return "";
}
}