#include <stdio.h>
#include <stdlib.h>

int
main(int argc, char *argv[])
{
    char input_string[16];
    long a, b;
    long op;
    long answer;
    int c;

    do {
        printf("Input number> ");   // 入力を促すプロンプトを表示
        // input_string[] に文字列を入力
        fgets(input_string, sizeof(input_string), stdin);
        // 変数aに入力された文字列を整数のデータ型に変換して代入
        a = strtol(input_string, NULL, 10);

        printf("Input number> ");   // 入力を促すプロンプトを表示
        // input_string[] に文字列を入力
        fgets(input_string, sizeof(input_string), stdin);
        // 変数bに入力された文字列を整数のデータ型に変換して代入
        b = strtol(input_string, NULL, 10);

        printf("+---Operator menu---+\n");
        printf("|  1. +%*c|\n", 13, ' ');
        printf("|  2. -%*c|\n", 13, ' ');
        printf("|  3. *%*c|\n", 13, ' ');
        printf("|  4. /%*c|\n", 13, ' ');
        printf("+-------------------+\n"); // メニュー画面を表示
        printf("Input operator number> "); // プロンプトを表示
        // input_string[] に文字列を入力
        fgets(input_string, sizeof(input_string), stdin);
        op = strtol(input_string, NULL, 10);
    
        switch (op) {
        case 1:
             answer = a + b;
             break;
        case 2:
             answer = a - b;
             break;
        case 3:
             answer = a * b;
             break;
        case 4:
            if (b == 0) {
                printf("divide by zero\n");
                continue;
            } else {
                answer = a / b;
            }
            break;
        default:
            printf("operator unknown\n");
            continue;
            //NOT REACHED
            break;
        }
        printf("answer is %ld\n", answer);

        printf("Input q[return] to quit, [return] to continue.\n");
        c = getchar();
    } while (c != 'q');
    
    return 0;
}
