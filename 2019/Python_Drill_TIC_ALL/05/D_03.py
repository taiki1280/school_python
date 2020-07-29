# 指定された文字列を指定された回数表示する関数
# 関数 disp_times(str, times) の定義


def disp_times(str, times):
    # for count in ___ア___:
    for count in range(times):
        # ___イ___
        print(str)


# Hello を３回表示
print('Hello を３回表示')
# ___ウ___
disp_times("Hello", 3)

# Good moring を５回表示
print('Good morning を５回表示')
# ___エ___
disp_times("Good morning", 5)
# Good evening を２回表示
print('Good evening を２回表示')
# ___オ___
disp_times("Good evening", 2)
