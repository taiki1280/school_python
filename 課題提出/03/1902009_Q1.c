#include <stdio.h>

int main(int argc, char *argv[])
{
    int i = 1;
    char c = 'a';
    long l = 0L;
    double d = 0.1;
    char str[10] = "hello.";

    printf("%d\n%d\n", &i, sizeof i);
    printf("%d\n%d\n", &c, sizeof c);
    printf("%d\n%d\n", &l, sizeof l);
    printf("%d\n%d\n", &d, sizeof d);
    printf("%d\n%d\n", &str, sizeof str);
    return 0;
}
