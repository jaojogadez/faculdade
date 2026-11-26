<?php
namespace App;

class Livro extends Material
{

    public function __construct(
        string $codigo,
        string $titulo, 
        int $ano,

        private string $autor,
        private int $paginas
    )
    {
        return parent::__construct($codigo, $titulo, $ano);
    }

    public function getAutor(): string 
    {
        return $this->autor;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }

    public function getPrazo(): int
    {
        return 7;
    }

     public function getMultaDiaria(): float
    {
        return 1.00;
    }
}