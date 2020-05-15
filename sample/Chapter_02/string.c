#include <stdio.h>

int main(int argc, char *argv[])
{
    char one_string[14]; // char型の配列を14要素で宣言

    one_string[0] = 104; // h を 10進数で表現した値(16進数では68)
    one_string[1] = 101; // e を 10進数で表現した値(16進数では65)
    one_string[2] = 108; // l を 10進数で表現した値(16進数では6c)
    one_string[3] = 108;
    one_string[4] = 111; // o を 10進数で表現した値(16進数では6f)
    one_string[5] = 44;  // , を 10進数で表現した値(16進数では2c)
    one_string[6] = 32;  // スペースを10進数で表現した値(16進数では20)
    one_string[7] = 119; // w を 10進数で表現した値(16進数では77)
    one_string[8] = 111;
    one_string[9] = 114; // r を 10進数で表現した値(16進数では72)
    one_string[10] = 108;
    one_string[11] = 100; // d を 10進数で表現した値(16進数では64)
    one_string[12] = 10;  // 改行(\n)を10進数で表現した値(16進数ではa)
    one_string[13] = 0;   // 文字列の終端を表す \0 は値としては 0

    printf("%s", one_string);

    return 0;
}
