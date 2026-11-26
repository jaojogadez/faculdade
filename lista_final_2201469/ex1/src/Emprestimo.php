<?php

namespace App;

class Emprestimo
{
    public function __construct(
        private Pessoa $pessoa,
        private Material $material,
        private int $diaEmprestimo
    ) {}

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    public function getMaterial(): Material
    {
        return $this->material;
    }

    public function getDiaLimite(): int
    {
        return $this->diaEmprestimo
            + $this->material->getPrazo();
    }

    public function calcularMulta(int $diaDevolucao): float
    {
        $atraso = $diaDevolucao - $this->getDiaLimite();

        if ($atraso <= 0) {
            return 0;
        }

        return $atraso * $this->material->getMultaDiaria();
    }
}