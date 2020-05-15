#include <stdio.h>

int
main(int argc, char *argv[])
{
    char msg[256] = "";
    char hello[] = "hello, world";
    char title[] = "Mr.";
    char name[] = "Taro";

    snprintf(msg,
             sizeof(msg),
             "%s %s%s\n%#o\n%04d\n% 4d\n|%-4d|%-4d|\n|%4d|%4d|\n"
             "%+d\n%+d\n%.4d\n%.5s\n%hhu\n%hhu\n%hhu\n%e\n%f\n%%\n",
             hello, title, name, 8, 10, 10, 1, 2, 1, 2, 10, -10, 10,
             "hello, world\n", 255, 256, 257, 0.1, 0.1);

    printf("%s", msg);
         
    return 0;
}
