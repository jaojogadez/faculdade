#include <stdio.h>
#include <locale.h>

// Receber os valores da base e da altura de um triângulo e informar a área. Onde área = (base x altura)/2

void main() {
  float base, altura, area;

  printf("Digite por gentileza qual e a base do seu triangulo: ");
  scanf("%f", &base);

  printf("Digite por gentileza qual e a altura da base do seu triangulo: ");
  scanf("%f", &altura);

  area = (base * altura)/2;

  printf("A area do seu triangulo e igual a %.2f", area);
}
