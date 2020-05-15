#include <stdio.h>

int
main(int argc, char *argv[])
{
    char msg[13] = "";
    char hello[14] = "hello, world\n";

    if (snprintf(msg, sizeof(msg), "%s", hello) > sizeof(msg)) {
        printf("Error: buffer over flow\n");
    }
        
    printf("%s", msg);
         
    return 0;
}
