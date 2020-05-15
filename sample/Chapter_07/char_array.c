#include <stdio.h>

int
main(int argc, char *argv[])
{
    char one_string[] = "hello, world\n";

    printf(" one_string   : %p\n", one_string);
    printf("&one_string[0]: %p\n", &one_string[0]);
    printf("&one_string[1]: %p\n", &one_string[1]);
    printf("&one_string[2]: %p\n", &one_string[2]);
    printf("&one_string[3]: %p\n", &one_string[3]);
    printf("&one_string[4]: %p\n", &one_string[4]);
    printf("&one_string[5]: %p\n", &one_string[5]);
    printf("&one_string[6]: %p\n", &one_string[6]);
    printf("&one_string[7]: %p\n", &one_string[7]);
    printf("&one_string[8]: %p\n", &one_string[8]);
    printf("&one_string[9]: %p\n", &one_string[9]);
    printf("&one_string[10]: %p\n", &one_string[10]);
    printf("&one_string[11]: %p\n", &one_string[11]);
    printf("&one_string[12]: %p\n", &one_string[12]);
    printf("&one_string[13]: %p\n", &one_string[13]);
    printf("&one_string[14]: %p\n", &one_string[14]);

    return 0;
}
