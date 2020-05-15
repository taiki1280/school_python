#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char *one_string, *new_string;

    one_string = malloc(14);                      // 14バイト確保
    if (one_string == NULL) {
        printf("Memory allocation error!\n");
        return -1;
    }
    // 確保したメモリのポインタを表示    
    printf("one_string=%p\n", one_string);

    strncpy(one_string, "hello, world\n", 14 - 1);// 文字列をコピー
    one_string[14 - 1] = '\0';

    printf("%s", one_string);                     // 文字列を表示

    new_string = realloc(one_string, 32);         // メモリを拡張
    if (new_string == NULL) { 
        printf("Memory allocation error!\n");
        free(one_string);
        return -1;
    }
    // 拡張したメモリのポインタを表示    
    printf("new_string=%p\n", new_string);
    one_string = new_string;
    
    strncpy(one_string, "hello, world\nHELLO, WORLD\n",
            32 - 1);                              // 新しい文字列をコピー
    one_string[32 - 1] = '\0';

    printf("%s", one_string);                     // 文字列を表示

    free(one_string);

    return 0;
}
