#include <stdio.h>

int
main(int argc, char *argv[])
{
    int i, j, end;
    int flag_not_prime;                 // 0なら素数, 1なら素数ではない

    end = 100;                          // 100までの素数を求める

    for (i = 1; i <= end; i = i + 1) {  // 1 ～ end まで繰り返して調べる
        flag_not_prime = 0;
        for (j = 2; j < i; j = j + 1) { // 2 ～ 今注目している数(i - 1)まででiを割ってみる
            if (i % j == 0) {           // 剰りが0(割り切れた)なら素数ではない
                flag_not_prime = 1;
                break;                  // 割り切れてしまったら、繰り返す必要がないのでbreakする
            }
        }
        if (i == 1) {
            continue;                   // 1は素数には含まないため、while (i <= end) に戻る
        }
        if (flag_not_prime == 0) {
            printf("%d\n", i);          // ここまで到達したら、i は素数
        }
    }
    return 0;
}
