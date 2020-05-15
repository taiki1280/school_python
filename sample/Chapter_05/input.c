#include <stdio.h>

int
main(int argc, char *argv[])
{
    char one_string[16];

    printf("input> ");                     // 入力を促すプロンプトを表示

    fgets(one_string, 16, stdin);          // one_string[] に文字列を入力

    printf("Your input is %s", one_string);// 入力した文字列を表示
    
    return 0;
}
