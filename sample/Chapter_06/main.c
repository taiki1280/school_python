#include <stdio.h>      // printf()関数などの標準Cライブラリのためのヘッダファイルをインクルード
#include "functions.h"  // 自分で作った関数群が定義されたfunctions.hをインクルード

int
main(int argc, char *argv[])
{
    int num_1;
    int num_2;
    int answer;

    num_1 = 1;
    num_2 = 2;

    // functions.hにプロトタイプ宣言されたsum()関数を実行
    answer = sum(num_1, num_2);
    printf("answer = %d\n", answer);

    // functions.hにプロトタイプ宣言されたsub()関数を実行
    answer = sub(num_1, num_2);
    printf("answer = %d\n", answer);

    // functions.hにプロトタイプ宣言されたmul()関数を実行    
    answer = mul(num_1, num_2);
    printf("answer = %d\n", answer);

    // functions.hにプロトタイプ宣言されたdiv()関数を実行    
    answer = div(num_1, num_2);
    printf("answer = %d\n", answer);
    
    return 0;
}
