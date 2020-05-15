#include <stdio.h>

int
main(int argc, char *argv[])
{
    double double_array[2];
    int int_array[2];
    char char_array[2];

    printf("address of double_array[0] is %p\n", &double_array[0]);
    printf("address of double_array[1] is %p\n", &double_array[1]);
    printf("address of int_array[0] is %p\n", &int_array[0]);
    printf("address of int_array[1] is %p\n", &int_array[1]);
    printf("address of char_array[0] is %p\n", &char_array[0]);
    printf("address of char_array[1] is %p\n", &char_array[1]);

    return 0;
}
