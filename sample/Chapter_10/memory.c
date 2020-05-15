#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char *one_string;

    // わざとメモリ確保を失敗させる
    // ※32ビットCPUの方は0xffffffffにしてみてください。
    one_string = malloc(0xffffffffffffffff);
    if (one_string == NULL) {
        // malloc()が失敗してエラーメッセージが表示
        printf("Memory allocation error!\n");
    }
    printf("one_string=%p\n", one_string);  // 失敗した場合はNULL
    free(one_string);                       // free()にはNULLも渡せる

    one_string = malloc(14);                // 14バイト確保
    if (one_string == NULL) {
        printf("Memory allocation error!\n");
        return -1;
    }
    // 確保したメモリのポインタを表示
    printf("one_string=%p\n", one_string);

    strncpy(one_string, "hello, world\n", 14 - 1);// 文字列をコピー
    one_string[14 - 1] = '\0';

    printf("%s", one_string);              // 文字列を表示

    // 確保したメモリのポインタを表示    
    printf("one_string=%p\n", one_string);
    free(one_string);
    // 解放したメモリのポインタを表示    
    printf("one_string=%p\n", one_string);

    return 0;
}
