#include <stdio.h>
#include <locale.h>

void main() {
    int n1, n2, n3, n4;
    float medium;

    printf("Digite 4 numeros por gentileza: ");
    scanf("%d%d%d%d", &n1, &n2, &n3, &n4);

    medium =  (n1 + n2 + n3 + n4)/4;

    printf("A media dos 4 valores e %f", medium);
}
