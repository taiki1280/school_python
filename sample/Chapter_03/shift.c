#include <stdio.h>

int
main(int argc, char *argv[])
{
    unsigned int n;

    n = 32768;  // 00000000000000001000000000000000

    printf("one left shift %u\n", n << 1);
    printf("two left shift %u\n", n << 2);

    printf("one right shift %u\n", n >> 1);
    printf("two right shift %u\n", n >> 2);
    
    return 0;
}
