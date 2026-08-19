<?php 
    $name = readline("Digite seu nome por gentileza: ");
    $age = readline("Digite sua idade por gentileza: ");

    if ($age >= 18) {
        echo "Maior de idade";
    } else {
        echo "Menor de idade";
    }
?>