#include <stdio.h>

int
main(int argc, char *argv[])
{
    int i, j, end;
    int flag_not_prime;

    end = 100;

    i = 1;

label_1:
    if (i <= end) {
        flag_not_prime = 0;
        j = 2;
label_2:
        if (j < i) {
            if (i % j == 0) {
                flag_not_prime = 1;
                goto label_3;
            }
            j = j + 1;
            goto label_2;
        }
label_3:
        if (i == 1) {
            i = i + 1;
            goto label_1;
        }
        if (flag_not_prime == 0) {
            printf("%d\n", i);
        }
        i = i + 1;
        goto label_1;
    }
    return 0;
}
