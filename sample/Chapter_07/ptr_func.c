#include <stdio.h>

// プロトタイプ宣言
// 引数としてint型の変数を2個受け取り、int型の値を返す関数sumを定義
int sum(int, int);
// 引数としてint型の変数を2個受け取り、int型の値を返す関数subを定義
int sub(int, int);
// 引数としてint型の変数を2個受け取り、int型の値を返す関数mulを定義
int mul(int, int);
// 引数としてint型の変数を2個受け取り、int型の値を返す関数divを定義
int div(int, int);

// sum()関数の実体
int
sum(int a, int b)
{
    int return_value;

    return_value = a + b;

    return return_value;
}

// sub()関数の実体
int
sub(int a, int b)
{
    int return_value;

    return_value = a - b;

    return return_value;
}

// mul()関数の実体
int
mul(int a, int b)
{
    int return_value;

    return_value = a * b;

    return return_value;
}

// div()関数の実体
int
div(int a, int b)
{
    int return_value;

    return_value = a / b;

    return return_value;
}

int
main(int argc, char *argv[])
{
    int num_1;
    int num_2;
    int answer;
    int (*ptr_function) (int, int);

    num_1 = 1;
    num_2 = 2;

    ptr_function = sum;     // sum()関数を関数ポインタ変数に代入
    //ptr_function = sub;   // sub()関数を関数ポインタ変数に代入
    //ptr_function = mul;   // mul()関数を関数ポインタ変数に代入
    //ptr_function = div;   // div()関数を関数ポインタ変数に代入

    answer = ptr_function(num_1, num_2);
    printf("answer = %d\n", answer);
    
    return 0;
}
