#include <stdio.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char filename[256] = "strcat_test";
    char ext[] = ".c";

    printf("filename is = %s\n", filename);
    
    strncat(filename, ext, sizeof(filename) - strlen(filename) - 1);
    filename[sizeof(filename) - 1] = '\0';

    printf("filename is = %s\n", filename);
    
    return 0;
}
