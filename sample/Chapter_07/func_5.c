#include <stdio.h>

// プロトタイプ宣言
// 引数としてint型のポインタ変数を3個受け取り、int型の値を返す関数sumを定義
int sum(int *, int *, int *);

// 関数の実体
int
sum(int *a, int *b, int *ans)
{
    *ans = *a + *b;

    return 0;
}

int
main(int argc, char *argv[])
{
    int num_1;
    int num_2;
    int *answer;
    int ans;

    num_1 = 1;
    num_2 = 2;
    answer = &ans;

    if (sum(&num_1, &num_2, &answer) != 0) {
        //現状のsum()関数は常に0を返すので、ここには絶対到達しない
        printf("error\n");
    }

    printf("The answer is ...\n");
    
    printf("answer = %d\n", *answer);

    return 0;
}
