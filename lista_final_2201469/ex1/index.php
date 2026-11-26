<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Livro;
use App\Jogo;
use App\Pessoa;
use App\Acervo;

$acervo = new Acervo();

// Criando materiais
$livro1 = new Livro(
    "001",
    "O Hobbit",
    1937,
    "Tolkien",
    310
);

$jogo = new Jogo(
    "002",
    "Banco Imobiliário",
    1935,
    2,
    6
);

$livro2 = new Livro(
    "003",
    "Dom Casmurro",
    1899,
    "Machado de Assis",
    256
);

// Criando pessoas
$pessoa1 = new Pessoa("100", "Pedro");
$pessoa2 = new Pessoa("101", "Maria");

// Realizando cadastros
$acervo->cadastrarMaterial($livro1);
$acervo->cadastrarMaterial($jogo);
$acervo->cadastrarMaterial($livro2);

$acervo->cadastrarPessoa($pessoa1);
$acervo->cadastrarPessoa($pessoa2);

// Função auxiliar para exibir resultados
function mostrarResultado(string $operacao, bool $sucesso): void
{
    echo $operacao . ": ";
    echo $sucesso ? "Sucesso" : "Recusado";
    echo PHP_EOL;
}

// Testando empréstimos
mostrarResultado(
    "Empréstimo do livro",
    $acervo->emprestar($pessoa1, "001", 10)
);

mostrarResultado(
    "Empréstimo do jogo",
    $acervo->emprestar($pessoa1, "002", 10)
);

// Testando material indisponível
mostrarResultado(
    "Material indisponível",
    $acervo->emprestar($pessoa2, "001", 11)
);

// Testando limite de empréstimos
mostrarResultado(
    "Terceiro empréstimo",
    $acervo->emprestar($pessoa1, "003", 11)
);

// Devolução atrasada
$multa = $acervo->devolver("001", 20);

if ($multa !== null) {
    echo "Multa: R$ " .
        number_format($multa, 2, ',', '.') . PHP_EOL;
}

// Devolução dentro do prazo
$multa = $acervo->devolver("002", 13);

if ($multa !== null) {
    echo "Multa: R$ " .
        number_format($multa, 2, ',', '.') . PHP_EOL;
}

// Novo empréstimo após devolução
mostrarResultado(
    "Novo empréstimo",
    $acervo->emprestar($pessoa1, "003", 21)
);

// Consultando materiais disponíveis
echo PHP_EOL . "MATERIAIS DISPONÍVEIS" . PHP_EOL;

foreach ($acervo->listarDisponiveis() as $material) {
    echo $material->getTitulo() . PHP_EOL;
}

// Consultando empréstimos pendentes
echo PHP_EOL . "EMPRÉSTIMOS DE PEDRO" . PHP_EOL;

foreach ($acervo->listarEmprestimos($pessoa1) as $e) {
    echo $e->getMaterial()->getTitulo();
    echo " - Prazo: dia " . $e->getDiaLimite();
    echo PHP_EOL;
}