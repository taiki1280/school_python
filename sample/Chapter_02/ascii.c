#include <stdio.h>

int main(int argc, char *argv[])
{
    // 文字を数値として保持するための変数characterを宣言(初期値は0)
    int character = 0;

    // 変数characterが256未満の間、{}の内部の処理を繰り返す
    while (character < 256)
    {
        // 変数characterが保持する値を文字として画面に表示
        printf("%c ", character);

        character = character + 1; // 変数characterの値を1増やす
        if ((character % 16) == 0)
        { // 16で割り切れたら、
            // 画面を改行する
            printf("\n");
        }
    }

    return 0;
}
