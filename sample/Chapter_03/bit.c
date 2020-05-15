#include <stdio.h>

int main(int argc, char *argv[])
{
    unsigned char a;
    unsigned char b;
    unsigned char answer;

    a = 5; // 00000101
    b = 3; // 00000011

    answer = a & b;
    printf("00000101 &(AND) 00000011 is %u\n", answer);

    answer = a | b;
    printf("00000101 |(OR)  00000011 is %u\n", answer);

    answer = a ^ b;
    printf("00000101 ^(XOR) 00000011 is %u\n", answer);

    a = 1; // 00000001
    answer = ~a;
    printf("~00000001 is %u\n", answer);

    return 0;
}
