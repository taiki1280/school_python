#include <stdio.h>

int
main(int argc, char *argv[])
{
    char one_string[16] = "hello, world\n";
    int length;

    length = 0;
    while (one_string[length] != '\0') {
        length = length + 1;  
    }

    printf("length is %d\n", length);
    
    return 0;
}
