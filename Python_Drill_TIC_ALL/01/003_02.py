""" 最終的な答え """
# ア、イ、オ、カ

# 長方形の面積を求める
# 縦を入力
vertical = input('縦を入力＝')
# 横を入力
side = input('横を入力＝')
# 面積を求める
area = int(vertical) * int(side)
# 面積を表示

# print("縦:" + vertical)
# print("縦:" + side)
# print("縦:" + str(area))

print("縦", vertical, sep=":")
print("横", side, sep=":")
print("面積", area, sep=":")
