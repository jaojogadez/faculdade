<?php
namespace App;

class Jogo extends Material
{
    public function __construct(
        string $codigo,
        string $titulo,
        int $ano,
        private int $minJogadores,
        private int $maxJogadores
    ) {
        parent::__construct($codigo, $titulo, $ano);
    }

    public function getMinJogadores(): int
    {
        return $this->minJogadores;
    }

    public function getMaxJogadores(): int
    {
        return $this->maxJogadores;
    }

    public function getPrazo(): int
    {
        return 3;
    }

    public function getMultaDiaria(): float
    {
        return 3.00;
    }
}