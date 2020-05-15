#include <stdio.h>

int
main(int argc, char *argv[])
{
    double number_1;
    int number_2;
    char character;

    double *pnumber_1;
    int *pnumber_2;
    char *pcharacter;

    printf("address of number_1 is %p\n", &number_1);
    printf("address of number_2 is %p\n", &number_2);
    printf("address of character is %p\n", &character);

    pnumber_1 = &number_1;
    pnumber_2 = &number_2;
    pcharacter = &character;
    
    printf("pnumber_1 is %p\n", pnumber_1);
    printf("pnumber_2 is %p\n", pnumber_2);
    printf("pcharacter is %p\n", pcharacter);

    number_1 = 0.1;
    number_2 = 1;
    character = 'a';

    printf("number_1 is %f\n", number_1);
    printf("number_2 is %d\n", number_2);
    printf("character is %c\n", character);

    printf("address of number_1 is %p\n", &number_1);
    printf("address of number_2 is %p\n", &number_2);
    printf("address of character is %p\n", &character);

    printf("pnumber_1 is %p\n", pnumber_1);
    printf("pnumber_2 is %p\n", pnumber_2);
    printf("pcharacter is %p\n", pcharacter);
    
    return 0;
}
