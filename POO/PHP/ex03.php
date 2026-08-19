<?php 
    $nota = 3;

    if ($nota > 7) {
        echo "Aluno Aprovado!";
    } elseif ($nota > 5 && $nota <= 7) {
        echo "Aluno de Recuperação.";
    } else {
        echo "Aluno Reprovado!";
    }

?>