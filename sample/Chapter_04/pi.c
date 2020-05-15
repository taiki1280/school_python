#include <stdio.h>
#include <stdlib.h>                     // srand(), rand()のため
#include <time.h>                       // time() のため

int
main(int argc, char *argv[])
{
    double x, y, insect_cnt;
    int i;

    insect_cnt = 0.0;
    i = 0;

    srand(time(NULL));                  // 乱数を使うためのおまじない

    while (i < 100000000) {             // 1億回繰り返す
        x = (double) rand() / RAND_MAX; // 変数x に0～1までの間の乱数を得る
        y = (double) rand() / RAND_MAX; // 変数y に〃
        if (x * x + y * y < 1.0) {      // 半径1.0の扇形の中に収まるか？(円の方程式)
            insect_cnt = insect_cnt+1.0;// 1億回中、半径1.0の扇形に収まった回数を変数insect_cntに記憶
        }
        i = i + 1;
    }

    // insect_cnt / i は、1億回中、半径1.0の扇形に収まった確率
    // 扇形を4倍すると円の面積となるので、* 4.0
    printf("%f\n", insect_cnt / i * 4.0);

    return 0;
}
