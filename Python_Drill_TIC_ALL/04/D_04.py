# 四則演算をする関数の定義


# 足し算 add(x, y)
def add(x, y):
    # ___ア___
    return x + y


# 引き算 sub(x, y)
def sub(x, y):
    # ___イ___
    return x - y


# 掛け算 mul(x, y)
def mul(x, y):
    # ___ウ___
    return x * y


# 割り算 div(x, y)
def div(x, y):
    # ___エ___
    return x / y


# 余り mod(x, y)
def mod(x, y):
    # ___オ___
    return x % y


# べき乗 pow(x, y)
def pow(x, y):
    # ___カ___
    return x ** y


# 計算結果を表示する関数
# calc_disp(x, y, op) の定義
def calc_disp(x, y, ans, op):
    # 演算子 op の判断
    # if ___キ___:  # 足し算 + のとき
    if op == "+":  # 足し算 + のとき
        print('{} + {} = {}'.format(x, y, ans))
    # elif ___ク___:  # 引き算 - のとき
    elif op == "-":  # 引き算 - のとき
        print('{} - {} = {}'.format(x, y, ans))
    # elif ___ケ___:  # 掛け算 * のとき
    elif op == "*":  # 掛け算 * のとき
        print('{} * {} = {}'.format(x, y, ans))
    # elif ___コ___:  # 割り算 / のとき
    elif op == "/":  # 割り算 / のとき
        print('{} / {} = {}'.format(x, y, ans))
    # elif ___サ___:  # 余り % のとき
    elif op == "%":  # 余り % のとき
        print('{} % {} = {}'.format(x, y, ans))
    # elif ___シ___:  # べき乗 ** のとき
    elif op == "**":  # べき乗 ** のとき
        print('{} ** {} = {}'.format(x, y, ans))


# キーボードから２つの整数を入力
x = int(input('X = '))
y = int(input('Y = '))
# 四則演算と結果を表示
# calc_disp(___ス___, '+')  # 足し算
calc_disp(x, y, add(x, y), '+')
# calc_disp(___セ___, '-')  # 引き算
calc_disp(x, y, sub(x, y), '-')
# calc_disp(___ソ___, '*')  # 掛け算
calc_disp(x, y, mul(x, y), '*')
# calc_disp(___タ___, '/')  # 割り算
calc_disp(x, y, div(x, y), '/')
# calc_disp(___チ___, '%')  # 余り
calc_disp(x, y, mod(x, y), '%')
# calc_disp(___ツ___, '**')  # べき乗
calc_disp(x, y, pow(x, y), '**')
