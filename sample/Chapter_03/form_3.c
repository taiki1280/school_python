#include <stdio.h>

int
main(int argc, char *argv[])
{
    int value;

    value = 100 > 99;
    printf("value is %d\n", value);

    value = 100 < 99;
    printf("value is %d\n", value);

    return 0;
}
