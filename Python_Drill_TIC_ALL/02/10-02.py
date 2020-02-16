x = 11
# 11に、1と11以外の約数があるかを調べる
# for n in range(1, 11):
for n in range(2, 11):
    # if n == 1:
    #     continue
    # nで11で割り切れるかを調べる
    if x % n == 0:
        print(x, "は", n, "で割り切れるので、素数ではありません。")
        # nで割り切れたのでループを終える
        break
else:
    print(x, "は素数です。")
