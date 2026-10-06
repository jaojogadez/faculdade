<?php 

require_once __DIR__  . '/vendor/autoload.php';

use App\Produto;
use App\Pedido;
use App\Jogador;
use App\Mochila;

// EXEMPLO

$produto = new Produto("Teclado Top", 354.90);
$pedido = new Pedido($produto, 14);

echo "Custo do pedido: R$ {$pedido->total()}" . PHP_EOL;
echo $pedido->detalhes() . PHP_EOL;

// FIXAÇÃO EM SALA

/* 
    Jogador (nome, vida, mochila)
    Mochila (capacidade, pesoOcupado)
    na mochilar criar método adicionarPeso(float $peso),
    que soma ao peso existente, não passando do limite
*/

echo "". PHP_EOL;
$mochila = new Mochila(100, 30);
$jogador = new Jogador("Limão", 100, $mochila);
echo $jogador->status() . PHP_EOL;

$mochila->adicionarPeso(50);
echo $jogador->status() . PHP_EOL;

$mochila->adicionarPeso(30);
echo $jogador->status() . PHP_EOL;