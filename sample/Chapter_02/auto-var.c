#include <stdio.h>

//
// 引数（パラメータ）を受け取らず、
// 文字列（文字の配列）を呼び出しもとの関数に渡す関数 func の宣言
//
char *
func(void)
{
    char one_string[14] = "hello, world\n"; // hello, world という
                                            // 文字列で初期化された
                                            // one_string という配列

    printf("from func: %s", one_string); // one_string の内容を表示

    return one_string; // 配列 one_string の
                       // 先頭アドレスを
                       // 呼び出し元に渡す
}

//
// メイン関数
// プログラムは、ここから始まる
//
int main(int argc, char *argv[])
{
    printf("from main: %s", func()); // 関数 func() を実行して、そこから渡された文字列を表示する

    return 0;
}
