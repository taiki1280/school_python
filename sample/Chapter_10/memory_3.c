#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    int i;
    char *ptr;

    ptr = malloc(2147483647); // 2GB確保
    if (ptr == NULL) {
        printf("Memory allocation error!\n");
        return -1;
    }

    getchar();                // [return]押下で書き込みをはじめるように

    for (i = 0; i < 2147483647; i++) {
        ptr[i] = 1;           // 確保したメモリに一要素ずつ値を書き込む
    }

    free(ptr);

    return 0;
}
