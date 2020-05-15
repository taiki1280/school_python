#include <stdio.h>

int
main(int argc, char *argv[])
{
    int n;

    n = 0;
    printf("pre inc n=%d\n", ++n);
    printf("n=%d\n", n);

    n = 0;
    printf("post inc n=%d\n", n++);
    printf("n=%d\n", n);

    return 0;
}
