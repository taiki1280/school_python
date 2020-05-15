#include <stdio.h>
int main(int argc, char *argv[])
{
    int num_1 = 1000;
    char num_2 = num_1;
    short num_3 = num_1;

    printf("int -> char %d\n", num_2);
    printf("int -> short %d\n", num_3);

    num_3 = (char)num_1; // num_1をchar型に
                         // キャスト(明示的な型変換)してから
                         // short型に代入
    printf("int -> (char) short %d\n", num_3);

    return 0;
}
