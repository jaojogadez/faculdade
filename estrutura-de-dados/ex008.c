#include <stdio.h>
int main()
{
    int n1, n2, n3, n4, n5, maior, menor, soma, media;
    printf("Digite o valor de 5 numeros inteiros: ");
    scanf("%d%d%d%d%d", &n1, &n2, &n3, &n4, &n5);

    maior = n1;

    if (n2 > maior)
        maior = n2;

    if (n3 > maior)
        maior = n3;

    if (n4 > maior)
        maior = n4;

    if (n5 > maior)
        maior = n5;

    menor = n1;

    if (n2 < menor)
        menor = n2;

    if (n3 < menor)
        menor = n3;

    if (n4 < menor)
        menor = n4;

    if (n5 < menor)
        menor = n5;

}