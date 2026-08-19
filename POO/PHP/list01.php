<?php 
    # EX 01:
    // Crie um script que exiba na tela seu nome completo, sua idade e a cidade onde mora:
    // Utilize tanto echo quanto print no mesmo script para imprimir as informações.
    echo "\nEXERCÍCIO 01\n\n";

    $name = "João Pedro Lima de Oliveira";
    $age = 19;
    $city = "Marília";

    echo "Meu nome é ${name}, atualmente tenho {$age} e moro na cidade de {$city}.";

    # EX 02:
    // Crie variáveis para armazenar seu nome, profissão e hobby. Exiba a frase:
    // Meu nome é [NOME], sou [PROFISSÃO] e gosto de [HOBBY].
    echo "\n\nEXERCÍCIO 02\n\n";


    $hobby = "sair com minha namorada.";
    $work = "Aprendiz de Fabricação";

    echo "Meu nome é ${name}, atualmente trabalho como {$work} e meu hobby favorito é {$hobby}";

    # EX 03:
    // Peça ao usuário dois números (use readline() para entrada no terminal) e exiba contas:
    echo "\n\nEXERCÍCIO 03\n\n";
    
    $num1 = readline("Digite um número por gentileza: ");
    $num2 = readline("Digite um outro número por gentileza: ");

    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $divi = $num1 / $num2;
    $rest = $num1 % $num2;

    echo "{$num1} + {$num2} = {$soma}" . PHP_EOL;
    echo "{$num1} - {$num2} = {$sub}" . PHP_EOL;
    echo "{$num1} * {$num2} = {$mult}" . PHP_EOL;
    echo "{$num1} / {$num2} = {$divi}" . PHP_EOL;
    echo "{$num1} % {$num2} = {$rest}" . PHP_EOL;

    # EX 04:
    // Peça a idade do usuário e informe se ele é maior de idade ou menor de idade:
    echo "\n\nEXERCÍCIO 04\n\n";
    
    $name = readline("Digite seu nome por gentileza: ");
    $age = readline("Digite sua idade por gentileza: ");

    if ($age >= 18) {
        echo "Maior de idade";
    } else {
        echo "Menor de idade";
    }

    # EX 05:
    // Peça a nota de um aluno (0 a 10) e classifique:
    echo "\n\nEXERCÍCIO 05\n\n";

    $nota = readline("Digite qual foi a nota por gentileza: ");

    if ($nota > 7) {
        echo "Aluno Aprovado!";
    } elseif ($nota > 5 && $nota <= 7) {
        echo "Aluno de Recuperação.";
    } else {
        echo "Aluno Reprovado!";
    }

    # EX 06:
    // Peça um número ao usuário e exiba a tabuada desse número (1 a 10) usando while.
    echo "\n\nEXERCÍCIO 06\n\n";
    
    $tabuadaContador = 1;
    $num = readline("Digite um número inteiro por gentileza: ");
    while ($tabuadaContador <= 10) {
        $resultado = $tabuadaContador * $num;
        echo "{$tabuadaContador} x {$num} = {$resultado}" . PHP_EOL;
        $tabuadaContador++;
    }

    # EX 07:
    // Exiba todos os números pares de 1 até 50 usando for.
    echo "\n\nEXERCÍCIO 07\n\n";

    for ($i=1; $i <= 50; $i++) { 
        echo "{$i} ";
    }

    # EX 08:
    // Exiba todos os números de 1 a 100 e escreva ao lado de cada número se ele é "Par" ou "Ímpar".
    echo "\n\nEXERCÍCIO 08\n\n";

    for ($i=1; $i <= 100; $i++) { 
        if ($i % 2 == 0) {
            echo "{$i} - Par \n";
            } else {
            echo "{$i} - Ímpar \n";
        }
    }

    # EX 09:
    // Exiba todos os números de 1 a 100 e escreva ao lado de cada número se ele é "Par" ou "Ímpar".
    echo "\n\nEXERCÍCIO 09\n\n";

    $frutas = ["Banana", "Abacate", "Uva", "Morango", "Abacaxi"];
    foreach ($frutas as $fruta) {
        echo "{$fruta} ";
    }

    # EX 10:
    // Crie um array associativo com informações de um carro (marca, modelo, ano) e exiba cada informação formatada.
    echo "\n\nEXERCÍCIO 10\n\n";

    $carro = [
        "marca" => "Ferrari",
        "modelo" => "top de linha",
        "ano" => 2100
    ]
?>