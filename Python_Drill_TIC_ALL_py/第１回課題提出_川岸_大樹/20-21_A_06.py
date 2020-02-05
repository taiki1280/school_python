# 税込み価格の計算
# キーボードから定価を入力し、整数型に変換
list_price = int(input("定価を入力してください"))
# 消費税率を入力し、整数型に変換
tax_rate = int(input("消費税を入力してください"))
# 税込み価格を計算
tax_price = list_price * (1 + tax_rate / 100)
# 入力した定価の表示
print("定価：" + str(list_price))
# 入力した税率の表示
print("消費税率：" + str(tax_rate) + "％")
# 税込み価格の表示
print("税込み価格は：" + str(tax_price) + "円です")
