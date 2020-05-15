#include <stdio.h>

const char *string_literal = "hello, world";

// 構造体定義
struct tag_string {
    char one_string[16];
};

// プロトタイプ宣言(ポインタ版)
struct tag_string *get_stringP(void);
// プロトタイプ宣言(実体版)
struct tag_string get_stringR(void);

// 関数の実体(ポインタ版)
struct tag_string *
get_stringP(void)
{
    struct tag_string a;
    int i;
    
    for (i = 0; i < sizeof(a.one_string) - 1 &&
         string_literal[i] != '\0'; i++) {
        a.one_string[i] = string_literal[i];
    }
    a.one_string[i] = '\0';
    
    return &a;
}

// 関数の実体(実体版)
struct tag_string
get_stringR(void)
{
    struct tag_string a;
    int i;
    
    for (i = 0; i < sizeof(a.one_string) - 1 &&
         string_literal[i] != '\0'; i++) {
        a.one_string[i] = string_literal[i];
    }
    a.one_string[i] = '\0';
    
    return a;
}

int
main(int argc, char *argv[])
{
    struct tag_string *a;
    struct tag_string b;

    a = get_stringP();
    b = get_stringR();

    printf("pointer %s\n", a->one_string);
    printf("real    %s\n", b.one_string);
        
    return 0;
}
