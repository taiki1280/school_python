price = int(input("定価を入力して下さい"))
tax = int(input("消費税を入力して下さい"))
tax_price = price * (1 + tax / 100)

print("定価",price,"円")
print("消費税率",tax,"円")
print("税込み価格は",tax_price,"円です")