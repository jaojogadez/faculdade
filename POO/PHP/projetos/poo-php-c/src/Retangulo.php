<?php
/*
        Crie a classe Retangulo com largura e altura privadas, do tipo float.
        - O construtor deve receber largura e altura e impedir valores menores ou iguais a zero.
        - Crie métodos públicos para calcular área e perímetro.
        - Crie um método público ehQuadrado(): bool, que informe se largura e altura são iguais.
        - Crie um método redimensionar(float $largura, float $altura): void que somente aceite novas dimensões válidas.
        - Não permita alteração direta de largura ou altura fora da classe.
    */

namespace App;


class Retangulo
{
    public function __construct(
        private float $altura,
        private float $largura
    ) {}

    public function area(): float
    {
        $resultado = $this->altura * $this->largura;
        return $resultado;
    }

    public function perimetro(): float
    {
        $resultado = ($this->altura * 2) + ($this->largura * 2);
        return $resultado;
    }

    public function ehQuadrado(): bool
    {
        $resultado = false;
        if ($this->altura == $this->largura) {
            $resultado = true;
        }
        return $resultado;
    }

    public function validar($largura, $altura): bool
    {
        return $largura <= 0 || $altura <= 0;
    }

    public function redimensionar(float $largura, float $altura): void
    {
        if ($this->validar($largura, $altura)) {
            $this->largura = $largura;
            $this->altura = $altura;
            echo "Valores redimensionados com sucesso!";
        } else {
            echo "Valores novos não são válidos.";
        }
    }
}
