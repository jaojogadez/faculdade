<?php 
    require_once __DIR__  . '/vendor/autoload.php';

    // Importa e usa a classe pessoa no código principal
    use App\Pessoa;
    use App\Produto;
    use App\Aluno;

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

?>


