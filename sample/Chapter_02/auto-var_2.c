#include <stdio.h>

void func(void)
{
    int count = 0; // この関数を実行した回数を
                   // 記録する変数countを宣言して、
                   // 初期値を0とする

    count = count + 1; // 変数countの値を1増やす

    printf("count = %d\n", count); // この関数を実行した回数を
                                   // 画面に表示する

    return;
}

int main(int argc, char *argv[])
{
    func();
    func();
    func();

    return 0;
}
