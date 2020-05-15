#include <stdio.h>

int
main(int argc, char *argv[])
{
    int number_2;
    int *pnumber_2;

    number_2 = 1;           //変数number_2 に 1という値を代入
    pnumber_2 = &number_2;  //ポインタ変数pnumber_2 に
                            //変数number_2 のアドレスを代入

    // pnumber_2 と指定した場合は、number_2のアドレスとなる
    printf("address of number_2 is %p\n", pnumber_2);

    // *pnumber_2 と指定した場合は、
    // pnumber_2が指し示す先のアドレスに格納されている値「1」になる
    printf("number_2 is %d\n", *pnumber_2);

    return 0;
}
