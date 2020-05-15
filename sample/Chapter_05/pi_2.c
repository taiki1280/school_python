#include <stdio.h>
#include <stdlib.h>                     // srand(), rand()のため
#include <time.h>                       // time() のため

int
main(int argc, char *argv[])
{
    double x, y, insect_cnt;
    time_t t1, t2;
    int i;

    insect_cnt = 0.0;
    i = 0;

    srand(time(NULL));                  // 乱数を使うためのおまじない

    t1 = time(NULL);
    while (i < 100000000) {             // 1億回繰り返す
        x = (double) rand() / RAND_MAX; // 変数x に0～1までの間の
                                        // 乱数を得る
        y = (double) rand() / RAND_MAX; // 変数y に0～1までの間の
                                        // 乱数を得る
        if (x * x + y * y < 1.0) {      // 半径1.0の扇形の中に
                                        // 収まるか？(円の方程式)
            insect_cnt = insect_cnt+1.0;// 1億回中、半径1.0の扇形に
                                        // 収まった回数を
                                        // 変数insect_cntに記憶
        }
        i = i + 1;
    }
    t2 = time(NULL);

    // insect_cnt / i は、1億回中、半径1.0の扇形に収まった確率
    // 扇形を4倍すると円の面積となるので、* 4.0
    printf("%f\n", insect_cnt / i * 4.0);

    printf("process time = %ld sec\n", t2 - t1);

    return 0;
}
