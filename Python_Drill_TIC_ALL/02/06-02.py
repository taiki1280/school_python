score1 = 11
score2 = 99
sum = score1 + score2

# 合計が160以上またはscore1かscore2が100
if sum >= 160 or score1 == 100 or score2 == 100:
    print("特待生")
# 合計が120以上かつscore1とscore2が40以上
elif sum >= 120 and score1 >= 40 and score2 >= 40:
    print("特待生")
# 合計点が110以上
elif sum >= 110:
    print("補欠合格")
# 条件外
else:
    print("不合格")
