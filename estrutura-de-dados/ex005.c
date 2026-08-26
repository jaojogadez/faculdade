#include <stdio.h>
int main()
{
    int a, b, c;

    printf("Qual o valor de A e de B: ");
    scanf("%d%d", &a, &b);

    c = a;
    a = b;
    b = c;

    printf("Valor de A: %d\n", a);
    printf("Valor de B: %d", b);
}