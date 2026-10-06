<?php

namespace App;

class Pedido
{
    public function __construct(
        private Produto $produto,
        private int $quantidade
    ) {}

    public function total(): float 
    {
        return $this->produto->getPreco() * $this->quantidade;
    }

    public function detalhes() : string
    {
        return "Produto: {$this->produto->getNome()}". PHP_EOL . "Quantidade: {$this->quantidade}" . PHP_EOL . "Total: R$ " . number_format($this->total(), 2, ',', '.');    
    }
}