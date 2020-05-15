#include <stdio.h>
#include <string.h>

int
main(int argc, char *argv[])
{
    char *database[47] = {
        "Hokkaido", "Aomori Prefecture", "Iwate Prefecture",
        "Miyagi Prefecture", "Akita Prefecture",
        "Yamagata Prefecture", "Fukushima Prefecture",
        "Ibaraki Prefecture", "Tochigi Prefecture",
        "Gumma Prefecture", "Saitama Prefecture", "Chiba Prefecture",
        "Tokyo", "Kanagawa Prefecture", "Niigata Prefecture",
        "Toyama Prefecture", "Ishikawa Prefecture",
        "Fukui Prefecture", "Yamanashi Prefecture",
        "Nagano Prefecture", "Gifu Prefecture", "Shizuoka Prefecture",
        "Aichi Prefecture", "Mie Prefecture", "Shiga Prefecture",
        "Kyoto", "Osaka", "Hyogo Prefecture", "Nara Prefecture",
        "Wakayama Prefecture", "Tottori Prefecture",
        "Shimane Prefecture", "Okayama Prefecture",
        "Hiroshima Prefecture", "Yamaguchi Prefecture",
        "Tokushima Prefecture", "Kagawa Prefecture",
        "Ehime Prefecture", "Kochi Prefecture", "Fukuoka Prefecture",
        "Saga Prefecture", "Nagasaki Prefecture",
        "Kumamoto Prefecture", "Oita Prefecture",
        "Miyazaki Prefecture", "Kagoshima Prefecture",
        "Okinawa Prefecture"
    };

    int i, cnt;

    cnt = 0;
    for (i = 0; i < 47; i++) {
        if (strstr(database[i], "Prefecture") != NULL) {
            printf("%s\n", database[i]);
            cnt++;
        }
    }
    printf("%d\n", cnt);

    return 0;
}
