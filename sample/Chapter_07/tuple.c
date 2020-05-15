#include <stdio.h>

int
main(int argc, char *argv[])
{
    int i, j;
    int tuple[4][5] = {{0}}; //0で初期化

    tuple[2][3] = 1;    

    for (i = 0; i < 4; i++) {
        for (j = 0; j < 5; j++) {
            printf("%d ", tuple[i][j]);
        }
        printf("\n");
    }
    
    return 0;
}
