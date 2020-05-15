#include <stdio.h>

int
main(int argc, char *argv[])
{
    int num_x = 1;
    int num_y = 2;
    int num_z;
    int num_1 = 1000;
    int num_2 = 2000;

    num_z = num_x + num_y;

    int *pnum_1 = &num_1;
    int *pnum_2 = &num_2;

    pnum_1 += 3;    //実験のために入れたポインタのバグ（わざと）
    pnum_2 += 3;    //

    printf("%d + %d = %d\n", *pnum_1, *pnum_2, *pnum_1 + *pnum_2);

    return 0;
}
