<?php

namespace App;

class Bicicleta extends Veiculo
{
    private string $tipo;

    public function __construct(
        string $codigo,
        string $modelo,
        float $valorDiaria,
        string $tipo
    ) {
        parent::__construct($codigo, $modelo, $valorDiaria);

        $tipo = strtolower(trim($tipo));

        if (!in_array($tipo, ['urbana', 'elétrica'], true)) {
            throw new \InvalidArgumentException(
                "O tipo deve ser urbana ou elétrica."
            );
        }

        $this->tipo = $tipo;
    }

    protected function calcularValor(int $dias): float
    {
        $total = $this->getValorDiaria() * $dias;

        if ($dias >= 7) {
            $total *= 0.90;
        }

        return $total;
    }

    public function descricao(): string
    {
        return $this->identificacao()
            . " | Tipo: {$this->tipo}";
    }
}
