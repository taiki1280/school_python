#include <stdio.h>

// 構造体定義
struct tag_coord {
    double x;
    double y;
};

// プロトタイプ宣言
void print_coordinates(struct tag_coord [], int);

// 関数の実体
void
print_coordinates(struct tag_coord c[], int num)
{
    int i;

    for (i = 0; i < num; i++) {
        printf("c[%d].x = %f\n", i, c[i].x);
        printf("c[%d].y = %f\n", i, c[i].y);

        //表示してから、中身を書き換えてみる！
        c[i].x = 12345.00;
        c[i].y = 54321.00;
    }
}
    
int
main(int argc, char *argv[])
{
    int i;
    struct tag_coord coord[4];

    coord[0].x = 1.00;
    coord[0].y = 2.00;
    coord[1].x = 3.00;
    coord[1].y = 4.00;
    coord[2].x = 5.00;
    coord[2].y = 6.00;
    coord[3].x = 7.00;
    coord[3].y = 8.00;

    print_coordinates(coord, 4);

   for (i = 0; i < 4; i++) {
        printf("coord[%d].x = %f\n", i, coord[i].x);
        printf("coord[%d].y = %f\n", i, coord[i].y);
    }
        
    return 0;
}
