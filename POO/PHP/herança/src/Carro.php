<?php 

namespace App;

class Carro extends Veiculo
{
    private int $portas;

    public function __construct(
        string $codigo,
        string $modelo,
        float $valorDiaria,
        int $portas
    ){
        parent::__construct($codigo, $modelo, $valorDiaria);

        if($portas <= 0){
            throw new \InvalidArgumentException(
                "A quantidade de portas deve ser positiva."
            );
        }

        $this->portas = $portas;
    }

    protected function calularValor(int $dias): float 
    {
        return ($this->getValorDiaria() * $dias) + 50;    
    }

    public function descricao() : string
    {
        return $this->identificacao()
            . " | Portas: {$this->portas}";    
    }
}