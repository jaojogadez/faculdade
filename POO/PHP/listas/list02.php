<?php 
    # EX 01:
    // Criar uma função que receba um parâmetro e exiba uma mensagem.
    echo "\nEXERCÍCIO 01\n\n";

    function saudar($name){
        echo "Olá, {$name}! Seja bem-vindo(a).";
    }

    $nameUser = readline("Digite seu nome por gentileza: ");
    saudar($nameUser);

    # EX 02:
    // Crie uma função dobrar($numero) que receba um número e retorne o dobro dele. No script principal, exiba o resultado.
    echo "\n\nEXERCÍCIO 02\n\n";

    function dobrar($num) {
        return $resultado = $num * 2;
    }

    $number = readline("Digite um número: ");
    echo "O dobro de {$number} é: " . dobrar($number);

    
    # EX 03:
    // Crie uma função somar($n1, $n2) que receba dois números e retorne a soma. Mostre o resultado chamando a função
    echo "\n\nEXERCÍCIO 03\n\n";

    function sum($n1, $n2) {
        return $result = $n1 + $n2;
    }

    $number1 = readline("Digite o 1º número: ");
    $number2 = readline("Digite o 2º número: ");

    echo "A soma dos números {$number1} e {$number2} é: " . sum($number1, $number2);

    # EX 04:
    // Crie uma função mensagem($texto = "Sem mensagem") que exiba o valor recebido, mas se não receber nada, exiba "Sem mensagem"
    echo "\n\nEXERCÍCIO 04\n\n";

    function message($message = "Sem mensagem"){
        return $message;
    }

    $msg = readline("Qual sua mensagem? ");

    if ($msg == "") {
        message();
    } else {
        message($msg);
    }

    # EX 05:
    // Crie uma função quadrado($n) que retorna o quadrado de um número, e outra função mostrarQuadrado($n) que chame quadrado() e exiba o resultado formatado.
    echo "\n\nEXERCÍCIO 05\n\n";

    function square($n){
        return $squareNum = $n * $n;
    }

    $responseNumber = readline("Digite um número: ");

    function showSquare($n){
        echo "O quadrado do número digitado é: ". square($n);
    }

    showSquare($responseNumber);

    # EX 06:
    // Crie uma função contarElementos($lista) que receba um array e retorne a quantidade de elemento Crie um array de frutas, passe para a função e exiba o resultado
    echo "\n\nEXERCÍCIO 06\n\n";

    function contarElementos($list){
        return count($list);
    }

    $fruits = ["Uva", "Morango", "Laranja", "Limão", "Abacate"];
    echo "A quantidade de itens na lista é: " . contarElementos($fruits);

    # EX 07:
    // Crie uma função verificarAprovacao($nota) que receba a média final de um aluno e retorne "Aprovado" se >= 7, "Recuperação" se >= 5, ou "Reprovado" caso contrário.
    echo "\n\nEXERCÍCIO 07\n\n";

    function verificarAprovacao($nota){
        if ($nota >= 7) {
            return "Aprovado!";
        } elseif ($nota >= 5) {
            return "Recuperação.";
        } else {
            return "Reprovado.";
        }
    }

    $notaUser = readline("Digite qual é a nota: ");
    echo verificarAprovacao($notaUser);

    # EX 08:
    // Crie uma função separarParesEImpares($numeros) que receba um array de números e retorne outro array com duas chaves: "pares" e "impares", cada uma contendo seus respectivos números.
    echo "\n\nEXERCÍCIO 08\n\n";


    function separarParesEImpares($numeros) {
        $pares = [];
        $impares = [];

        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }

        return [$pares, $impares];
    }

    $numerosLista = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    // Desestruração
    [$pares, $impares] = separarParesEImpares($numerosLista);

    echo "Lista de pares: ";
    print_r($pares); // Exibe array

    echo "Lista de impares: ";
    print_r($impares); // Exibe array

    # EX 09:
    // Uma função calcularMedia($n1, $n2, $n3) que retorna a média.  Uma função resultadoAluno($nome, $n1, $n2, $n3) que use calcularMedia(para retornar a frase:O aluno [NOME] obteve média [MEDIA] e está [APROVADO/RECUPERAÇÃO/REPROVADO].
    echo "\n\nEXERCÍCIO 09\n\n";

    function calcularMedia($n1, $n2, $n3) {
        return $media = ($n1 + $n2 + $n3)/3;
    }

    function resultadoAluno($nomeAluno, $n1, $n2, $n3) {
        $status = "";
        $resultado = calcularMedia($n1, $n2, $n3);
        if($resultado >= 7) {
            $status = "APROVADO";
        } elseif ($resultado >= 5) {
            $status = "RECUPERAÇAO";
        } else {
            $status = "REPROVADO";
        }

        return "O aluno {$nomeAluno} obteve a média de {$resultado} e está {$status}.";
    }

    $nome = readline("Qual o nome do aluno? ");
    $nota1 = readline("Digite a 1º nota: ");
    $nota2 = readline("Digite a 2º nota: ");
    $nota3 = readline("Digite a 3º nota: ");

    echo resultadoAluno($nome, $nota1, $nota2, $nota3);

    # EX 10:
    /*O Mercadinho Bom Dia precisa de um sistema simples em PHP para calcular o valor da compra de um cliente. O dono, seu João, explicou como funciona:

     1. O cliente pode comprar vários produtos. Cada produto tem nome, preço
     unitário e quantidade.
     2. O sistema deve calcular o total de cada item (preço unitário ×
     quantidade).
     3. O sistema deve calcular o valor total da compra.
     4. Se o cliente tiver cartão fidelidade, ele ganha 10% de desconto.
     5. Ao final, o sistema deve exibir um cupom fiscal formatado, com:
     o Lista de produtos (nome, preço unitário, quantidade, subtotal)
     o Valor total bruto
     o Valor do desconto (se houver)
     o Valor final a pagar 

     Crie pelo menos quatro funções
    */

    echo "\n\nEXERCÍCIO 10\n\n";

    echo "Sistema de Pedido".PHP_EOL;
    
    $produto = [
        "nome" => "",
        "preco" => 0,
        "qtde" => 0,
        "subtotal" => 0
    ];

    $pedido = [];
    $vendas = [];


    $startProgram = true;

    while ($startProgram) {
        $responseUser = readline("Qual o nome do produto? ");
        $produto["nome"] = $responseUser;
        
        $responseUser = readline("Qual o preço do produto? ");
        $produto["preco"] = $responseUser;

        $responseUser = readline("Qual a quantide do produto? ");
        $produto["qtde"] = $responseUser;

        $produto["subtotal"] = $produto["preco"] * $produto["qtde"];
        $responseUser = readline("Deseja adicionar um novo produto? [s/n]");


        $pedido[] = $produto;

        if ($responseUser == "n") {
            $startProgram = false;
            $vendas[] = $pedido;
        }

        
    }


    function showPedidos($pedido){
        echo PHP_EOL . "Pedido final: " . PHP_EOL;
        foreach ($pedido as $produto) {
            echo "{$produto['qtde']}x - {$produto['nome']} - Preço unitário: {$produto['preco']} - SubTotal - {$produto['subtotal']}" . PHP_EOL;
        }
    }

    showPedidos($pedido);

    function calcularTotalPedido($pedido){
        $total = 0;
        foreach ($pedido as $produto) {
            $total += $produto["subtotal"];
        }
        return $total;
    }

    $totalPedido = calcularTotalPedido($pedido);
    $vendas[] = $totalPedido;

    

    echo PHP_EOL . "E o preço total ficou no valor de: R$" . calcularTotalPedido($pedido);

    $temCartão = readline("O cliente possui o cartão fidelidade? [s/n]");
    
    function aplicarDesconto($temCartão, $vendas) {
        if($temCartão == 's'){
            return $desconto = $vendas[1] * 0.1;
        } else {
            return $desconto = 0;
        }
    }

    $desconto = aplicarDesconto($temCartão, $vendas);

    function showNotaFiscal($vendas, $pedido, $desconto) {
        echo PHP_EOL."NOTA FISCAl: ";
        showPedidos($pedido);
        echo "Quantidade de produtos: " . count($vendas[0]) . PHP_EOL;   
        echo "Preço Total da Compra: R$ {$vendas[1]}".PHP_EOL;
        echo "Valor do Desconto (10%) R$ {$desconto}".PHP_EOL;
        $vendas[1] -= $desconto;
        echo "Valor final: R$ {$vendas[1]}";
    }

    showNotaFiscal($vendas, $pedido, $desconto);
?>