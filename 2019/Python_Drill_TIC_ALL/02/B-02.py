# 成績を評価する

# 得点を入力(1回目)
score1 = int(input("1回目の得点を入力："))
# 得点を入力(2回目)
score2 = int(input("2回目の得点を入力："))

# 成績を評価
if score1 < 70:
    print("不合格")
else:
    if score2 >= 70:
        print("合格")
    else:
        print("不合格")
