<?php 
    /*
        2. Criar classe aluno com:
        - nome, RA, curso, semestre
        - função apresentar() que retorna string
        - criar 2 objetos
    */

    namespace App;

    class Aluno
    {
        public function __construct(
            public string $nome,
            public int $RA,
            public string $curso,
            public int $semestre
        ){}

        public function apresentar() : string 
        {
            return "O aluno {$this->nome}, de matrícula {$this->RA} está inserido no curso {$this->curso} e atualmente está no {$this->semestre}º semestre.";
        }
    }
?>