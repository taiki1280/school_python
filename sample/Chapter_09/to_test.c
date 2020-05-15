#include <stdio.h>
#include <ctype.h>

int
main(int argc, char *argv[])
{
    char hello[16] = "hello, world";
    char HELLO[16];
    char *src, *dst;

    src = hello;
    dst = HELLO;

    while (*src != '\0') {
        *dst = toupper(*src);
        src++;
        dst++;
    }
    *dst = '\0';

    printf("%s\n", HELLO);

    return 0;
}
