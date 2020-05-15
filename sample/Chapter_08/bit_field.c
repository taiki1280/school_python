#include <stdio.h>

struct tag_bit_field {
    unsigned on_off: 1;
    unsigned half_byte: 4;
};
   
int
main(int argc, char *argv[])
{
    struct tag_bit_field bit_field;

    bit_field.on_off = 1;
    bit_field.half_byte = 15;

    printf("bit_field.on_off = %u\n", bit_field.on_off);
    printf("bit_field.half_byte = %u\n", bit_field.half_byte);

    bit_field.on_off = 2;
    bit_field.half_byte = 16;

    printf("bit_field.on_off = %u\n", bit_field.on_off);
    printf("bit_field.half_byte = %u\n", bit_field.half_byte);
        
    return 0;
}
