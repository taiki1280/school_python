#include <stdio.h>
#include <string.h>


int
main(int argc, char *argv[])
{
    char database[] = "064-0941,ASAHIGAOKA,CHUO-KU SAPPORO-SHI,"
                      "HOKKAIDO\n060-0041,ODORIHIGASHI,CHUO-KU "
                      "SAPPORO-SHI,HOKKAIDO\n060-0042,"
                      "ODORINISHI(1-19-CHOME),CHUO-KU "
                      "SAPPORO-SHI,HOKKAIDO";
    char *p1, *p2;
    char *token;

    p1 = database;

    do {
        // 一行取り出すために、'\n'を'\0'に置換する
        // そうすれば、p1が文字列（一行）として扱える
        p2 = strchr(p1, '\n');
        if (p2 == NULL) {
            // databaseの最後が'\n'ではなかったときの配慮
            p2 = &database[strlen(database)-1];
        } else {
            *p2 = '\0';
        }
        // 取り出した一行を表示
        printf("%s\n", p1);

        // strtok()関数は、最初は第一引数に対象の文字列を指定する
        token = strtok(p1, ",");
        printf("code = %s\n", token);

        // 二回目以降は第一引数をNULLにする
        token = strtok(NULL, ",");
        printf("addr2 = %s\n", token);

        token = strtok(NULL, ",");
        printf("addr1 = %s\n", token);

        token = strtok(NULL, ",");
        printf("prefecture = %s\n", token);

        printf("\n");
        p1 = p2 + 1;
    } while (*p1 != '\0');

    return 0;
}
