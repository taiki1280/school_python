even_list = []
odd_list = []
for number in range(10):
    prompt = "{}件目：整数を入力 = ".format(number + 1)
    data = int(input(prompt))
    if data % 2 == 0:
        even_list.append(data)
    else:
        odd_list.append(data)
print("偶数値リスト = ", even_list)
print("奇数値リスト = ", odd_list)
