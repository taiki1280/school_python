number = 2
count = 1
# numberが1,000,000以上になるまで、繰り返す
# while ___ア___:
while number < 1000000:
    # number ___イ___
    number *= 2
    # count ___ウ___
    count += 1
print("2の累乗で1,000,000未満の最大の数は2の{}乗である。".format(count-1))
