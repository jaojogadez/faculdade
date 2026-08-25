<?php 
    require_once __DIR__  . '/vendor/autoload.php';

    // Importa e usa a classe pessoa no código principal
    use App\Pessoa;

    // Criamos nosso primeiro objeto em PHP usando POO
    // A palavra new cria um novo objeto ou instância
    $pessoa = new Pessoa("Lima", 22);
    echo $pessoa->apresentar() . PHP_EOL;
    $pessoa = new Pessoa("Oliveira", 19);
    echo $pessoa->apresentar() . PHP_EOL;
?>


