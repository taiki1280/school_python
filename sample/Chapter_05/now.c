#include <stdio.h>
#include <time.h>

int
main(int argc, char *argv[])
{
    time_t now;

    now = time(NULL);

    printf("now %ld\n", now);
    
    return 0;
}
