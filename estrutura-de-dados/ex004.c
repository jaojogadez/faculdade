#include <stdio.h>
#include <locale.h>

//  Ler os valores de a, b, c e informar o valor de x, seguindo a fórmula x = 2ab + 3ac – 4bc.

int a, b, c, x;

void main() {
    printf("Digite qual o valor de a: ");
    scanf("%d", &a);

    printf("Digite qual o valor de b: ");
    scanf("%d", &b);

    printf("Digite qual o valor de c: ");
    scanf("%d", &c);

    x = (2*a*b) + (3*a*c) - (4*b*c);

    printf("O resultado da conta e de: %d", x);
}
