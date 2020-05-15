#include <stdio.h>

int
main(int argc, char *argv[])
{
    int number_array[4] = {1000, 2000, 3000, 4000};
    int *pnumber;

    pnumber = number_array;     //ポインタ変数pnumberに、
                                //配列number_array[]の
                                //先頭要素のアドレスを代入
                                //pnumber = &number_array[0]; でも良い！
    printf("*pnumber is %d\n", *pnumber);

    pnumber = &number_array[1]; //ポインタ変数pnumberに、
                                //配列number_array[1]のアドレスを代入
    printf("*pnumber is %d\n", *pnumber);

    pnumber = &number_array[2]; //ポインタ変数pnumberに、
                                //配列number_array[2]のアドレスを代入
    printf("*pnumber is %d\n", *pnumber);

    pnumber = &number_array[3]; //ポインタ変数pnumberに、
                                //配列number_array[3]のアドレスを代入
    printf("*pnumber is %d\n", *pnumber);
    
    return 0;
}
