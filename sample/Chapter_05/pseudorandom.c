#include <stdio.h>
#include <stdlib.h>                     // srand(), rand()のため

int
main(int argc, char *argv[])
{
    int c;

    srand(0);
    
    do {
        printf("%d\n", rand() % 6 + 1); // 1～6のランダムな数値を得る
        c = getchar();                  // 1文字キーボードから入力を得る
    } while (c != 'q');                 // 入力された1文字がqではない間繰り返す
    return 0;
}
