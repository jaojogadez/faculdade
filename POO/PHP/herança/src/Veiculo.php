<?php

//Uma classe abstrata funciona como um modelo. Ela define características e comportamentos que outras classes devem seguir, mas não permite criar um objeto diretamente dela.

namespace App;

abstract class Veiculo
{
    private string $codigo;
    private string $modelo;
    private float $valorDiaria;

    public function __construct(
        string $codigo,
        string $modelo,
        float $valorDiaria
    ) {
        if (trim($codigo) === '' || trim($modelo) === '') {
            throw new \InvalidArgumentException(
                "O Código não pode ser vazio."
            );
        }

        if ($valorDiaria <= 0) {
            throw new \InvalidArgumentException(
                "A diária deve ser maior que zero."
            );
        }

        $this->codigo = $codigo;
        $this->modelo = $modelo;
        $this->valorDiaria = $valorDiaria;
    }    
    
    public function getCodigo() : string 
    {
        return $this->codigo;
    }

    public function getModelo() : string 
    {
        return $this->modelo;
    }

    public function getValorDiaria() : string 
    {
        return $this->valorDiaria;
    }

    protected function identificao() : string  
    {
        return "Código: {$this->codigo} | Modelo: {$this->modelo}";    
    }

    public final function cotar(int $dias): float
    {
        if($dias <= 0){
            throw new \InvalidArgumentException(
                "A quantidade de dias deve ser um inteiro positivo."
            );
        }

        return $this->calcularValor($dias);
    }

    abstract protected function calcularValor(int $dias): float;

    abstract public function descricao() : string;  
    
}