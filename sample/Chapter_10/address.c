#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX_CHARACTER    (256)

// 住所データを表す構造体
//
struct tag_address {
    int no;                      // 住所番号
    char name[MAX_CHARACTER];    // 名前
    char addr[MAX_CHARACTER];    // 住所
    struct tag_address *next;    // 次のデータへのポインタ
};

// リストの先頭を記憶しておくためのポインタ変数
// プログラム起動時は何もデータがないのでNULL
//
struct tag_address *address = NULL;

// 住所データを登録する関数
int enter(int, const char *, const char *);
// 指定した住所番号の住所データを検索する関数
struct tag_address *find(int);
// 指定した住所番号の住所データを削除する関数
int delete(int);
// 全データを表示する
void show_all(void);
// 全データを削除する
void delete_all(void);

int main(int argc, char **argv)
{
    struct tag_address *address_data;
    char in_buf[8];
    char in_no[MAX_CHARACTER];
    char in_addr[MAX_CHARACTER];
    char in_name[MAX_CHARACTER];
    char *c;
    int no, menu_no;

    do {
        printf("Input 1[ret] to enter, 2[ret] to search, "
               "3[ret] to delete, 4[ret] to all, 9[ret] to quit.\n");
        printf("Input menu number> ");
        fgets(in_buf, sizeof(in_buf), stdin);
        menu_no = strtol(in_buf, NULL, 10);
        switch (menu_no) {
        case 1:
            printf("Input number> ");
            fgets(in_no, sizeof(in_no), stdin);
            no = strtol(in_no, NULL, 10);

            printf("Input name> ");
            fgets(in_name, sizeof(in_name), stdin);
            c = strchr(in_name, '\n');
            if (c != NULL) {
                *c = '\0';
            }

            printf("Input address> ");
            fgets(in_addr, sizeof(in_addr), stdin);
            c = strchr(in_addr, '\n');
            if (c != NULL) {
                *c = '\0';
            }

            if (enter(no, in_name, in_addr) == -1) {
                printf("error\n\n\n");
            } else {
                printf("entered\n\n\n");
            }
            break;
        case 2:
            printf("Input number> ");
            fgets(in_no, sizeof(in_no), stdin);
            no = strtol(in_no, NULL, 10);
            
            address_data = find(no);
            if (address_data == NULL) {
                printf("no data\n\n\n");
            } else {
                printf("no = %d\nname = %s\naddress = %s\n\n\n",
               no, address_data->name, address_data->addr);
            }
            break;
        case 3:
            printf("Input number> ");
            fgets(in_no, sizeof(in_no), stdin);
            no = strtol(in_no, NULL, 10);
            
            if (delete(no) == -1) {
                printf("no data\n\n\n");
            } else {
                printf("deleted\n\n\n");
            }
            break;
        case 4:
            show_all();
            break;
        default:
            break;
        }
    } while (menu_no != 9);

    delete_all();
    
    return 0;
}

int
enter(int no, const char *name, const char *addr)
{
    struct tag_address *ptr_now, *ptr_before, *ptr_new;

    ptr_now = address; // リストの先頭を作業用のポインタ変数に代入
    ptr_before = NULL;

    // 挿入場所を探すためにリストを手繰る繰り返し処理
    while (ptr_now != NULL) {
        // 重複データがある
        if (no == ptr_now->no) {
            printf("already exist\n");
            return -1;
        }
        // 新しい住所データの挿入先が見つかったので繰り返しを止める
        if (no < ptr_now->no) {
            break;
        }

        // 見つからなかった場合は、次のデータへのポインタを、
        // 作業用のポインタ変数に代入して、
        // 現在の作業用ポインタを保存して繰り返す
        ptr_before = ptr_now;
        ptr_now = ptr_now->next;
    }

    // 新しい住所データ用のメモリを確保する
    ptr_new = malloc(sizeof(struct tag_address));
    if (ptr_new == NULL) {
        printf("Memory allocation error!\n");
        return -1;
    }
    ptr_new->no = no;
    strncpy(ptr_new->name, name, sizeof(ptr_new->name) - 1);
    ptr_new->name[sizeof(ptr_new->name) - 1] = '\0';
    strncpy(ptr_new->addr, addr, sizeof(ptr_new->addr) - 1);
    ptr_new->addr[sizeof(ptr_new->addr) - 1] = '\0';

    // まだデータが一件もなければ、新しい住所データを先頭にする
    if (address == NULL) {
        address = ptr_new;
    }
    // 新しい住所データの次ポインタに作業用ポインタ（挿入場所）を代入
    ptr_new->next = ptr_now;
    // 一つ前の住所データの次ポインタを新しい住所データにする
    if (ptr_before != NULL) {
        ptr_before->next = ptr_new;
    }

    if (address->no > ptr_new->no) {
        address = ptr_new;
    }
    
    return 0;
}

struct tag_address *
find(int no)
{
    struct tag_address *ptr;

    ptr = address; // リストの先頭を作業用のポインタ変数に代入

    // リストを手繰るための繰り返し処理
    while (ptr != NULL) {
        // 指定された住所番号の住所が見つかったら、
        // その構造体のアドレスを返す
        if (no == ptr->no) {
            return ptr;
        }
        // 指定された住所番号より、現在みている住所番号が大きければ
        // これ以上検索しても見つからないので繰り返しを止める
        if (no < ptr->no) {
            break;
        }

        // 見つからなかった場合は、次のデータへのポインタを、
        // 作業用のポインタ変数に代入して繰り返す
        ptr = ptr->next;
    }

    // 見つからなかったら NULL を返す
    return NULL;
}

int
delete(int no)
{
    struct tag_address *ptr_now, *ptr_before;

    ptr_now = address; // リストの先頭を作業用のポインタ変数に代入

    // まだ一件もデータがないので削除できない
    if (ptr_now == NULL) {
        return -1;
    }

    // 削除データを探すためにリストを手繰る繰り返し処理
    while (ptr_now != NULL) {
        // 削除データが見つかったので繰り返しを止める
        if (no == ptr_now->no) {
            break;
        }

        // これ以上探しても削除データはない
        if (no < ptr_now->no) {
            return -1;
        }

        // 見つからなかった場合は、次のデータへのポインタを、
        // 作業用のポインタ変数に代入して、
        // 現在の作業用ポインタを保存して繰り返す
        ptr_before = ptr_now;
        ptr_now = ptr_now->next;
    }
    if (ptr_now == NULL) {
        return -1;
    }

    // ポインタの付け替え
    if (address == ptr_now) {
        address = ptr_now->next;
    } else {
        ptr_before->next = ptr_now->next;
    }

    // 削除されたデータのメモリを解放する
    free(ptr_now);
    
    return 0;
}

void
show_all(void)
{
    struct tag_address *ptr_now;

    ptr_now = address; // リストの先頭を作業用のポインタ変数に代入

    while (ptr_now != NULL) {
        printf("no = %d\nname = %s\naddress = %s\n\n\n",
               ptr_now->no, ptr_now->name, ptr_now->addr);
        ptr_now = ptr_now->next;
    }
}

void
delete_all(void)
{
    struct tag_address *ptr_now, *ptr_before;

    ptr_now = address; // リストの先頭を作業用のポインタ変数に代入

    while (ptr_now != NULL) {
        ptr_before = ptr_now;
        ptr_now = ptr_now->next;
        free(ptr_before);
    }
}
