<?php

namespace App;

class Motocicleta extends Veiculo
{
    private int $cilindrada;

    public function __construct(
        string $codigo,
        string $modelo,
        float $valorDiaria,
        int $cilindrada
    ) {
        parent::__construct($codigo, $modelo, $valorDiaria);

        if ($cilindrada <= 0) {
            throw new \InvalidArgumentException(
                "A cilindrada deve ser positiva."
            );
        }

        $this->cilindrada = $cilindrada;
    }

    protected function calcularValor(int $dias): float 
    {
        return ($this->getValorDiaria() *$dias) + (15 * $dias);
    }

    public function descricao(): string
    {
        return $this->identificacao()
            . " | Cilindrada: {$this->cilindrada}cc";
    }
}