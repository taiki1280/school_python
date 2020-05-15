#include <stdio.h>

int
main(int argc, char *argv[])
{
    int number_array[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                          -1}; // -1は番兵
    int answer;
    int *pnumber;

    // pnumberの配列number_array[]の先頭アドレスを入れておく
    pnumber = number_array;
    answer = 0;

    while (*pnumber != -1) {
          answer += *pnumber;
          pnumber++;
    }

    printf("answer = %d\n", answer);
        
    return 0;
}
