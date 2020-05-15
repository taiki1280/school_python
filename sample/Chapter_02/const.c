#include <stdio.h>

int main(int argc, char *argv[])
{
    const char character = 'A';
    const int number = 1;

    printf("character is = %c\n", character);
    printf("number is = %d\n", number);

    character = 'B'; //←コンパイルエラー
    number = 2;      //←コンパイルエラー

    return 0;
}
