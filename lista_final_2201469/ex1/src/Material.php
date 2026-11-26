<?php

namespace App;

abstract class Material
{
    public function __construct(
        private string $codigo,
        private string $titulo,
        private int $ano
    ){}

    public function getCodigo(): string 
    {
        return $this->codigo;
    }

    public function getTitulo(): string 
    {
        return $this->titulo;
    }

    public function getAno(): int 
    {
        return $this->ano;
    }

    abstract public function getPrazo(): int;

    abstract public function getMultaDiaria(): float;

}