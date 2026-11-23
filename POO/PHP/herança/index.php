<?php 

require_once __DIR__ . "/vendor/autoload.php";

use Locacao\Carro;
use Locacao\Motocicleta;
use Locacao\Bicicleta;


function dinheiro(float $valor):string 
{
    return "R$ " . number_format($valor, 2, ',', '.');
}

echo "===== CENTRAL DE LOCACAO =====\n\n";

// 1. Cadastro dos veículos

$carro = new Carro('C001', 'Toyota Corolla', 100, 4);

$moto = new Motocicleta('M001', 'Honda CG 160', 60, 160);

$bicicleta = new Bicicleta('B001', 'Caloi City Tour', 40, 'urbana');

// 2. Lista única de veículos

$veiculos = [
    $carro,
    $moto,
    $bicicleta
];

// 3. Descrição e cotação de três dias

echo "===== LISTA DE VEICULOS =====\n\n";

foreach ($veiculos as $veiculo) {

    echo $veiculo->descricao() . "\n";

    $valor = $veiculo->cotar(3);

    echo "Cotacao de 3 dias: " . dinheiro($valor) . "\n\n";
}

// 4. Bicicleta: comparação de seis e sete dias

echo "===== DESCONTO DA BICICLETA =====\n\n";

echo "6 dias: " . dinheiro($bicicleta->cotar(6)) . "\n";

echo "7 dias: " . dinheiro($bicicleta->cotar(7)) . "\n\n";

// 5. Teste de quantidade de dias inválida

echo "===== TESTE DE DIAS INVALIDOS =====\n\n";

try {
    $carro->cotar(0);
} catch (\InvalidArgumentException $erro) {
    echo "Erro: " . $erro->getMessage() . "\n";
}

try {
    $moto->cotar(-3);
} catch (\InvalidArgumentException $erro) {
    echo "Erro: " . $erro->getMessage() . "\n";
}

// 6. Teste de diária inválida

echo "\n===== TESTE DE DIARIA INVALIDA =====\n\n";

try {
    $veiculoInvalido = new Carro(
        'C002',
        'Carro de teste',
        0,
        4
    );
} catch (\InvalidArgumentException $erro) {
    echo "Erro: " . $erro->getMessage() . "\n";
}

// 7. Consultar diária após as cotações

echo "\n===== CONSULTA FINAL =====\n\n";

echo "Diaria do carro: "
    . dinheiro($carro->getValorDiaria()) . "\n";

echo "Diaria da moto: "
    . dinheiro($moto->getValorDiaria()) . "\n";

echo "Diaria da bicicleta: "
    . dinheiro($bicicleta->getValorDiaria()) . "\n";