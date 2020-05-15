#include <stdio.h>

int
main(int argc, char *argv[])
{
    int a, b;
    int answer;

    a = 1;
    b = 0;
    answer = a / b;
    printf("%d / %d = %d\n", a, b, answer);

    return 0;
}
