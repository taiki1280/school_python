#include <stdio.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char filename[256] = "strcat_test";
    char ext[] = ".c";

    printf("filename is = %s\n", filename);
    
    strcat(filename, ext);

    printf("filename is = %s\n", filename);
    
    return 0;
}
