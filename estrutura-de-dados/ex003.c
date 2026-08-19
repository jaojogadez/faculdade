#include <stdio.h>
#include <locale.h>

//  Ler o valor de uma mercadoria e o valor de desconto (%), e informar o preço com o desconto.

float mercadoria, desconto, valorFinal;

void main() {
    printf("Digite qual o valor da mercadoria: ");
    scanf("%f", &mercadoria);

    printf("Digite qual o valor do desconto: ");
    scanf("%f",&desconto);

    valorFinal = mercadoria - ((mercadoria*(desconto/100)));
    printf("O preco final e de: %.2f", valorFinal);
}
