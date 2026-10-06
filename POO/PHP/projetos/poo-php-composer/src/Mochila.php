<?php

namespace App;

class Mochila
{
    public function __construct(
        public float $capacidade,
        public float $pesoOcupado,
    ){}

    public function adicionarPeso(float $peso) : bool 
    {
        if ($peso <= 0) {
            return false;
        }

        if($this->pesoOcupado + $peso > $this->capacidade) {
            return false; 
        }

        $this->pesoOcupado += $peso;
        return true;
    }
    
    public function getCapacidade() :float 
    {
        return $this->capacidade;   
    }
    public function getPesoOcupado() :float 
    {
        return $this->pesoOcupado;   
    }


    
}