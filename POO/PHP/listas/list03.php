<?php 
    # Exemplo:
    // Exemplo de Impressão (Pintar uma Matriz no Console)
    echo "\nEXEMPLO DE MATRIZ\n\n";

    $matriz = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    foreach ($matriz as $linha) {
        foreach ($linha as $valor) {
            // echo $valor;
            echo str_pad($valor, 3, " ", STR_PAD_LEFT);
        }
        echo PHP_EOL;
    }

    # Desafio 01:
    /*
    Você tem uma prateleira representada por uma matriz 3x3. Cada posição armazena a
    quantidade de um produto.

    Escreva um programa que:
        1. Leia a matriz de quantidades.
        2. Calcule e exiba:
        o O total de produtos na prateleira.
        o A posição (linha, coluna) onde está a maior quantidade
    
    */ 
    echo "\nDesafio 01:\n\n";

    $matriz = [
        [2, 5, 3],
        [1, 27, 4],
        [7, 2, 1]
    ];

    $totalQuantidade = 0;
    $posicaoLinha = 0;
    $posicaoColuna = 0;
    $maiorValor = 0;

    // Aqui o segredo é usar For Each com indice 
    foreach ($matriz as $indiceLinha => $linha) {
        foreach ($linha as $indiceColuna => $valor) {
            $totalQuantidade += $valor;

            if ($valor > $maiorValor) {
                $maiorValor = $valor;

                $posicaoLinha = $indiceLinha + 1; // +1 pois os indices iniciam em 0
                $posicaoColuna = $indiceColuna + 1;
            }
        }
    }

    echo "Total de produtos: {$totalQuantidade}" . PHP_EOL;
    echo "Maior quantidade: {$maiorValor} na posição ({$posicaoLinha}, {$posicaoColuna})";

    # Desafio 02:
    /*
    Um cinema representa seus assentos como uma matriz 5x5.
    • 0 = assento vazio
    • 1 = assento ocupado

    Faça um programa que:
    1. Conte quantos lugares estão disponíveis.
    2. Mostre a primeira posição vazia disponível.
    
    */ 
    echo "\nDesafio 02:\n\n";

    $matriz = [
        [0, 1, 0, 1, 1],
        [1, 0, 0, 1, 1],
        [1, 1, 1, 1, 0],
        [0, 1, 1, 1, 1],
        [1, 1, 1, 1, 1]
    ];

    $countDisponivel = 0;
    $posicaoLinha = 0;
    $posicaoColuna = 0;

    // Como verificar q é o primeiro disponível?
    foreach ($matriz as $indiceLinha => $linha) {
        foreach ($linha as $indiceColuna => $valor) {
            if ($valor == 0) {
                $countDisponivel++;

                if ($countDisponivel == 1) {
                    $posicaoLinha = $indiceLinha + 1; // +1 pois os indices iniciam em 0
                    $posicaoColuna = $indiceColuna + 1;
                }
            }

        }
    }

    echo "Lugares disponíveis: {$countDisponivel}".PHP_EOL;
    echo "Primeiro lugar disponível: ({$posicaoLinha}, {$posicaoColuna})";

    # Desafio 03:
    /*
    Crie um programa que verifique se uma matriz 3x3 representa uma solução válida de Sudoku (números de 1 a 9 sem repetição).
    */ 
    echo "\nDesafio 03:\n\n";

    $matriz = [
        [2, 9, 4],
        [7, 2, 3],
        [6, 1, 8]
    ];

    $valores = [];
    $isValid = "";

    foreach ($matriz as $linha) {
        foreach ($linha as $valor) {
           $valores[] = $valor;
        }
    }
    
    print_r($valores);
    
    // foreach ($matriz as $linha) {
    //     foreach ($linha as $valor) {
    //        foreach ($valores as $numero) {
    //             if ($numero == $valor) {
    //                 $isValid = "Sudoku Válido";
    //             } else {
    //                 $isValid = "Sudoko Inválido";
    //                 break;
    //             }
    //        }
    //     }
    // }

    sort($valores);

    if ($valores == [1, 2, 3, 4, 5, 6, 7, 8, 9]) {
        $isValid = "Sudoku válido";
    } else {
        $isValid = "Sudoku Inválido";
    }

    echo $isValid;

    # Desafio 05:
    /*
    Dado um array com N números inteiros e um número X, escreva um programa que diga se X está presente no array e em qual posição.
    */ 

    echo "\n\nDesafio 05:\n\n";

    $startProgram = true;
    $numeros = [];

    while ($startProgram) {
        $response = readline("Digite um número inteiro ou sair: ");
        if ($response == 'sair') {
            $startProgram = false;
            echo "Contagem Finalizada! \n\n";
        } else {
            $numeros[] = $response;
        }
    }

    $searchNum = readline("Qual número deseja buscar? ");

    foreach ($numeros as $indiceNumero => $numero) {
        if ($searchNum == $numero) {
            print_r($numeros);
            $indiceNumero += 1;
            echo "Encontrado na posição: {$indiceNumero}";
        }
    }
    
    # Desafio 06:
    /*
    Implemente o jogo Resta 1 em uma matriz 5x5:
        • 1 = pino presente
        • 0 = espaço vazio

        O movimento válido é:
        • Um pino pula sobre outro pino para uma posição vazia.
        • O pino "pulando" e o pino "pulável" ficam 0, e a posição final vira 1. // Usei uma ajudinha do chat pra entender esse jogo

        Tarefa:
        • Simule um movimento válido no tabuleiro e mostre a matriz atualizada.
    */ 
    echo "\n\nDesafio 06:\n\n";

    // Temos dois pinos iniciais, o 1º pino vai fazer o movimento pulando o 2º pino
    $tabuleiro = [
        [1, 1, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0]
    ];

    echo "TABULEIRO INICIAL: \n\n";
    foreach ($tabuleiro as $linha) {
        foreach ($linha as $valor) {
            // echo $valor;
            echo str_pad($valor, 3, " ", STR_PAD_LEFT);
        }
        echo PHP_EOL;
    }

    // Aplicando 'movimento'
    $tabuleiro[0][0] = 0;
    $tabuleiro[0][1] = 0;
    $tabuleiro[0][2] = 1;

     echo "\nTABULEIRO FINAL: \n\n";
    foreach ($tabuleiro as $linha) {
        foreach ($linha as $valor) {
            // echo $valor;
            echo str_pad($valor, 3, " ", STR_PAD_LEFT);
        }
        echo PHP_EOL;
    }

    # Desafio 07:
    /*
    Dada uma matriz N x N, onde:

    • 0 = caminho livre
    • 1 = parede
    • S = posição inicial
    • E = saída

    Escreva um programa que determine se existe um caminho de S até E usando busca em
    profundidade (DFS) ou largura (BFS).
    */ 

    echo "\n\nDesafio 07:\n\n";
    // Não tenho a mínima ideia de como fazer isso ;-;
    // tive que pesquisar: 

    function podeAndar () {
        if ($valor == 1) {
            return false;
        }
        return true;
    } 
    
    echo "Se o valor do 'tabuleiro' for 0: ". podeAndar(0);
    echo "Se o valor do 'tabuleiro' for 1: ". podeAndar(1);

?>