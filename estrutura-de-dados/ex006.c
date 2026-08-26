#include <stdio.h>
int main()
{
    int area, perimetro, lado;

    printf("Digite o valor do lado do quadrado: ");
    scanf("%d", &lado);

    area = lado * lado;
    perimetro = lado * 4;

    printf("Area: %d\n", area);
    printf("Perimmetro: %d", perimetro);
}