#include <stdio.h>

int
main(int argc, char *argv[])
{
    int i, j, end;
    int flag_not_prime;         // 0なら素数, 1なら素数ではない

    end = 100;                  // 100までの素数を求める

    i = 1;
    
    while (i <= end) {          // 1 ～ end まで繰り返して調べる
        flag_not_prime = 0;
        j = 2;
        while (j < i) {         // 2 ～ 今注目している数(i - 1)まででiを割ってみる
            if (i % j == 0) {   // 剰りが0(割り切れた)なら素数ではない
                flag_not_prime = 1;
                break;          // 割り切れてしまったら、繰り返す必要がないのでbreakする
            }
            j = j + 1;
        }
        if (flag_not_prime == 0) {
            printf("%d\n", i);  // ここまで到達したら、i は素数
        }
        i = i + 1;
    }
    return 0;
}
