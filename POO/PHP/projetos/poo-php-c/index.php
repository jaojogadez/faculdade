<?php 
    require_once __DIR__  . '/vendor/autoload.php';

    // Importa e usa a classe pessoa no código principal
    use App\Pessoa;
    use App\Produto;
    use App\Aluno;
    use App\Retangulo;

    // Criamos nosso primeiro objeto em PHP usando POO
    // A palavra new cria um novo objeto ou instância
    echo PHP_EOL . "EXEMPLO DO PROF: " . PHP_EOL;
    $pessoa = new Pessoa("Lima", 22);
    echo $pessoa->apresentar() . PHP_EOL;
    $pessoa = new Pessoa("Oliveira", 19);
    echo $pessoa->apresentar() . PHP_EOL;

    echo PHP_EOL . "EXERCÍCIO 01: " . PHP_EOL;

    echo "Produto 01: " . PHP_EOL;
    $product = new Produto("Kit Kat", "Alimentos", "Nestlê", 4.99);
    echo $product->detalhes() . PHP_EOL;

    echo "Produto 02: " . PHP_EOL;
    $product = new Produto("Fiat Uno", "Automóveis", "Fiat", 15000);
    echo $product->detalhes() . PHP_EOL;

    echo PHP_EOL . "EXERCÍCIO 02: " . PHP_EOL;

    echo "Aluno 01: " . PHP_EOL;
    $aluno = new Aluno("João Pedro", 2201469, "Ciência da Computação", 2);
    echo $aluno->apresentar() . PHP_EOL;

    echo "Aluno 02: " . PHP_EOL;
    $aluno = new Aluno("Isabela Lima", 1234567, "Direito", 10);
    echo $aluno->apresentar() . PHP_EOL;

    // Exercício 01 
    echo "EXERCÍCO 01: " . PHP_EOL;

    // Instancia 01
    echo "Instância 01: " . PHP_EOL;
    $retangulo = new Retangulo(10,10);

    echo "A área do retângulo é " . $retangulo->area() . PHP_EOL;
    echo "O perímetro do retângulo é ". $retangulo->perimetro() . PHP_EOL;

    if ($retangulo->ehQuadrado()) {
        echo "É um quadrado!" . PHP_EOL;
    } else {
        echo "Não é um quadrado." . PHP_EOL;
    }

    $retangulo->redimensionar($largura = 3, $altura = 5);
    echo PHP_EOL . "Nova área: ". $retangulo->area() . PHP_EOL;
    echo PHP_EOL . "Nova perímetro: ". $retangulo->perimetro() . PHP_EOL;
    
    echo "Tentando aplicar um valor abaixo de zero: " . PHP_EOL;
    $retangulo->redimensionar($largura = -1, $altura = 5);

    // Instância 02
    echo "Instância 02: " . PHP_EOL;
    $retangulo = new Retangulo(2,3);

    echo "A área do retângulo é " . $retangulo->area() . PHP_EOL;
    echo "O perímetro do retângulo é ". $retangulo->perimetro() . PHP_EOL;

    if ($retangulo->ehQuadrado()) {
        echo "É um quadrado!" . PHP_EOL;
    } else {
        echo "Não é um quadrado." . PHP_EOL;
    }

    $retangulo->redimensionar($largura = 3, $altura = 2);
    echo PHP_EOL . "Nova área: ". $retangulo->area() . PHP_EOL;
    echo "Nova perímetro: ". $retangulo->perimetro() . PHP_EOL;
    
    echo "Tentando aplicar um valor abaixo de zero: " . PHP_EOL;
    $retangulo->redimensionar($largura = 1, $altura = 0);


?>


