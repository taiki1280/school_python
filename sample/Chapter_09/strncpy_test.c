#include <stdio.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char string_1[16] = "hello, world";
    char string_2[16] = "";

    printf("string_2 is = %s\n", string_2);
    
    strncpy(string_2, string_1, sizeof(string_2));

    printf("string_2 is = %s\n", string_2);
    
    return 0;
}
