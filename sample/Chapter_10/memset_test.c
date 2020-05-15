#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    int i;
    int *ptr;

    ptr = malloc(sizeof(int) * 8);

    for (i = 0; i < 8; i++) {
        printf("%d ", ptr[i]);
    }
    printf("\n");

    memset(ptr, -1, sizeof(int) * 8);

    for (i = 0; i < 8; i++) {
        printf("%d ", ptr[i]);
    }
    printf("\n");

    return 0;
}
