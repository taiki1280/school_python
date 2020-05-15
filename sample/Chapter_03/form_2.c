#include <stdio.h>

int
main(int argc, char *argv[])
{
    int a;
    int b;

    a = 100;
    b = 99;
    if (a > b) {
        printf("%d > %d is true\n", a, b);
    }

    a = 99;
    b = 100;
    if (a < b) {
        printf("%d < %d is true\n", a, b);
    }

    a = 100;
    b = 100;
    if (a >= b) {
        printf("%d >= %d is true\n", a, b);
    }
    
    a = 100;
    b = 100;
    if (a <= b) {
        printf("%d <= %d is true\n", a, b);
    }

    a = 100;
    b = 100;
    if (a == b) {
        printf("%d == %d is true\n", a, b);
    }

    a = 100;
    b = 99;
    if (a != b) {
        printf("%d != %d is true\n", a, b);
    }

    return 0;
}
