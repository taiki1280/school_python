#include <stdio.h>

int
main(int argc, char *argv[])
{
    int return_val;

    return_val = printf("hello, world\n");
    printf("return_val is %d\n", return_val);

    //この様に書いても問題はありません
    printf("return_val is %d\n", printf("hello, world\n"));
    
    return 0;
}
