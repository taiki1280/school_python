#include <stdio.h>

int main(int argc, char *argv[])
{
    int answer;
    int cnt;

    answer = 0;
    cnt = 0;
    while (cnt < 10)
    {
        printf("answer = %d + (%d + 1)\n", answer, cnt);
        answer = answer + (cnt + 1);
        cnt = cnt + 1;
    }
    printf("answer = %d\n", answer);

    return 0;
}
