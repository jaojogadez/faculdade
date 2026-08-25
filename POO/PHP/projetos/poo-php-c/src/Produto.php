<?php 
    /*
        1. Criar classe produto com:
        - nome, categoria, marca e preço
        - função detalhes() que retorna string
        - criar 2 objetos
    */

    namespace App;

    class Produto
    {
        public function __construct(
            public string $nome,
            public string $categoria,
            public string $marca,
            public int $preco
        ) {}

        public function detalhes() : string 
        {
            return "Produto: {$this->nome}\nCategoria: {$this->categoria}\nMarca: {$this->marca}\nPreço: R$ {$this->preco}";    
        }
    }
?>