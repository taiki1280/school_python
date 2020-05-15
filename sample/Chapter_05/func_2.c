#include <stdio.h>

// プロトタイプ宣言
// 引数としてint型の変数を2個受けとり、int型の値を返す関数subを定義
int sub(int, int);

// 関数の実体
int
sub(int a, int b)
{
    a -= b;     // 受け取った変数a自体に計算の結果を代入
                // (a = a - b) と同じ意味

    return a;
}

int
main(int argc, char *argv[])
{
    int a;
    int answer;

    a = 2;

    printf("before sub() a = %d\n", a); // 関数実行前の a の値

    answer = sub(a, 1);                 // 関数には変数以外にも、
                                        // 対応するデータ型を渡せる

    printf("after sub() a = %d\n", a);  // 関数実行後の a の値

    printf("answer = %d\n", answer);

    return 0;
}
