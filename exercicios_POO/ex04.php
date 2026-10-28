<?php

class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas;
    private int $paginaAtual = 1;

    public function __construct(string $titulo, string $autor, int $paginas) {
        $this-> titulo = $titulo;
        $this-> autor = $autor;
        $this-> paginas = $paginas;
} 
    public function lerPaginas(int $quantidade){
        $this-> paginaAtual += $quantidade;

        if ($this-> paginaAtual > $this-> paginas){
            $this-> paginaAtual = $this->paginas;
}
        echo "Você leu mais {$quantidade} páginas. Página atual: {$this->paginaAtual}/{$this->paginas}\n";
}
    public function getProgresso(): float {
        return ($this->paginaAtual / $this->paginas) * 100;
}
    public function terminou(): bool {
        return $this->paginaAtual >= $this->paginas;
}
    public function getTitulo(): string{
        return $this->titulo;
}
} 

$titulo = readline("Título do livro: ");
$autor = readline("Autor: ");
$paginas = readline("Número total de páginas: ");

$livro = new Livro($titulo, $autor, $paginas);

echo "\nLivro '{$livro->getTitulo()}' cadastrado com sucesso!\n";

$paginasLidas = readline("Quantas páginas você deseja ler agora? ");

$livro->lerPaginas($paginasLidas);

echo "Progresso: " . round($livro->getProgresso(), 2) . "%\n";

if ($livro->terminou()) {
    echo "Parabéns, você terminou o livro!\n";
}