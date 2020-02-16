number = 437
divisor = 2
# number を divisor で割り切れるまで、ループを繰り返す。
# while ___ア___:
while number % divisor:
    # 割り切れなかった場合は、divisor を 1 増やす
    # ___イ___
    divisor += 1
# print("%s は%s の約数です。" % (___ウ___, ___エ___))
print("%s は%s の約数です。" % (divisor, number))
