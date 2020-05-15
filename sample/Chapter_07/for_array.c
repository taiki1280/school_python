#include <stdio.h>

int
main(int argc, char *argv[])
{
    int number_array[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                          -1}; // -1は番兵
    int i, answer;

    for (i = 0, answer = 0; number_array[i] != -1; i++) {
        answer += number_array[i];
    }
    printf("answer = %d\n", answer);
        
    return 0;
}
