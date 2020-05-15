#include <stdio.h>

int
main(int argc, char *argv[])
{
    int number_array[] = {0x6c6c6568, 0x77202c6f,
                          0x646c726f, 0x0000000a};
    //int number_array[] = {0x68656c6c, 0x6f2c2077,
    //                      0x6f726c64, 0x0a000000}; PowerPCなどではこちらを使ってください

    printf("%s", (char *) number_array);
        
    return 0;
}
