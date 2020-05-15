#include <stdio.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char full_name[256] = "NIPPON,Taro";
    char first_name[256] = "Hanako";
    char *ptr;

    //名前の開始点を見つけて、ptrに保存する
    ptr = strpbrk(full_name, " ,");
    ptr++;    
   
    strcpy(ptr, first_name); // TaroをHanakoに
                             // 置き換えるため文字列コピー
    // ↓より安全
    //strncpy(ptr, first_name,
    //        sizeof(full_name) - 1 - strlen(first_name) - 1);
    //full_name[sizeof(full_name) - 1] = '\0';

    printf("Full name = %s\n", full_name);

    return 0;
}
