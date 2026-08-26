#include <stdio.h>
int main()
{
    char nome[50];
    float nota1, nota2, media;

    printf("Digite o nome do aluno: ");
    scanf("%s", &nome);

    printf("Digite o valor da nota 01 e 02: ");
    scanf("%f%f", &nota1, &nota2);

    media = (nota1 + nota2)/2;

    printf("Aluno: %s\n", nome);
    printf("Media: %f", media);
    
}