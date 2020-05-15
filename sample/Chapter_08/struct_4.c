#include <stdio.h>

// 構造体定義
struct tag_coord {
    double x;
    double y;
};

// プロトタイプ宣言
void print_coordinates(struct tag_coord *);

// 関数の実体
void
print_coordinates(struct tag_coord *c)
{
    printf("c->x = %f\n", c->x);
    printf("c->y = %f\n", c->y);

    //この関数で表示してから、中身を書き換えてみる！
    c->x = 12345.00;
    c->y = 54321.00;
}
    
int
main(int argc, char *argv[])
{
    struct tag_coord coord;

    coord.x = 1.00;
    coord.y = 2.00;

    print_coordinates(&coord);

    printf("coord.x = %f\n", coord.x);
    printf("coord.y = %f\n", coord.y);
        
    return 0;
}
