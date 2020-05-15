#include <stdio.h>

int
main(int argc, char *argv[])
{
    int num_1;
    int num_2;
    int answer;

    num_1 = 1;
    num_2 = 2;

    answer = sum(num_1, num_2); // 関数を利用

    printf("answer = %d\n", answer);

    return 0;
}

// 関数の実体
int
sum(double a, double b)
{
    int return_value;

    return_value = a + b;

    return return_value;
}
