<?php

namespace App;

class Pessoa
{
    public function __construct(
        private string $matricula,
        private string $nome
    ) {}

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}