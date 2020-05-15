#include <stdio.h>

int
main(int argc, char *argv[])
{
    int a;
    int b;
    
    a = 1;
    b = 2;
    
    if (!(a == b)) {
        printf("True\n");
    }

    if (!a == b) {
        printf("False\n");
    }

    printf("!0 is %d\n", !0);
    printf("!1 is %d\n", !1);
    printf("!99 is %d\n", !99);

    return 0;
}
