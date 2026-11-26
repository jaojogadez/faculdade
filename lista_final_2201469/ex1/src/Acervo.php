<?php

namespace App;

class Acervo
{
    private array $materiais = [];
    private array $emprestimos = [];

    public function cadastrarMaterial(Material $material): bool
    {
        $codigo = $material->getCodigo();

        if (isset($this->materiais[$codigo])) {
            return false;
        }

        $this->materiais[$codigo] = $material;

        return true;
    }

    public function estaDisponivel(string $codigo): bool
    {
        return isset($this->materiais[$codigo])
            && !isset($this->emprestimos[$codigo]);
    }

    public function emprestar(
        Pessoa $pessoa,
        string $codigo,
        int $dia
    ): bool {
        if (!isset($this->pessoas[$pessoa->getMatricula()])) {
            return false;
        }

        $pessoa = $this->pessoas[$pessoa->getMatricula()];

        if (!$this->estaDisponivel($codigo)) {
            return false;
        }

        $quantidade = 0;

        foreach ($this->emprestimos as $emprestimo) {
            if (
                $emprestimo->getPessoa()->getMatricula()
                === $pessoa->getMatricula()
            ) {
                $quantidade++;
            }
        }

        if ($quantidade >= 2) {
            return false;
        }

        $this->emprestimos[$codigo] = new Emprestimo(
            $pessoa,
            $this->materiais[$codigo],
            $dia
        );

        return true;
    }

    public function devolver(
        string $codigo,
        int $diaDevolucao
    ): ?float {
        if (!isset($this->emprestimos[$codigo])) {
            return null;
        }

        $emprestimo = $this->emprestimos[$codigo];

        $multa = $emprestimo->calcularMulta($diaDevolucao);

        unset($this->emprestimos[$codigo]);

        return $multa;
    }

    public function listarDisponiveis(): array
    {
        $disponiveis = [];

        foreach ($this->materiais as $material) {
            if ($this->estaDisponivel($material->getCodigo())) {
                $disponiveis[] = $material;
            }
        }

        return $disponiveis;
    }

    public function listarEmprestimos(Pessoa $pessoa): array
    {
        $resultado = [];

        foreach ($this->emprestimos as $emprestimo) {
            if (
                $emprestimo->getPessoa()->getMatricula()
                === $pessoa->getMatricula()
            ) {

                $resultado[] = $emprestimo;
            }
        }

        return $resultado;
    }

    private array $pessoas = [];

    public function cadastrarPessoa(Pessoa $pessoa): bool
    {
        $matricula = $pessoa->getMatricula();

        if (isset($this->pessoas[$matricula])) {
            return false;
        }

        $this->pessoas[$matricula] = $pessoa;

        return true;
    }
}