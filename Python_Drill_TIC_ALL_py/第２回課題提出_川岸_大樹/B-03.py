# 閏年の判断

# 西暦を入力
year = int(input("西暦を入力："))
# 閏年を判断
if year % 4 == 0 and year % 100 != 100 and year % 400 == 0:
    print("西暦{}年は、閏年です。".format(year))
else:
    print("西暦{}年は、閏年ではありません。".format(year))
