#include <stdio.h>

int
main(int argc, char *argv[])
{
    int character = 0;

loop:
    printf("%c ", character);
    character = character + 1;
    if ((character % 16) == 0) {
        printf("\n");
    }
    if (character < 256) {
        goto loop;
    }

    return 0;
}
