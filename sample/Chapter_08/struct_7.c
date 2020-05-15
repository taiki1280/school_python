#include <stdio.h>

int
main(int argc, char *argv[])
{
    // main()関数でしか使わない場合は、ここでも定義を書ける
    struct tag_question {
        char character;
        double number;
    };
    
    printf("size of question is %zu\n", sizeof(struct tag_question));
        
    return 0;
}
