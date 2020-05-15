#include <stdio.h>

int
main(int argc, char *argv[])
{
    int a = 1;

    if (a == 1) {
        printf("a is 1\n");
    } else if (a == 2) {
        printf("a is 2\n");
    } else {
        printf("a is neither 1 nor 2\n");
    }
    
    return 0;
}
