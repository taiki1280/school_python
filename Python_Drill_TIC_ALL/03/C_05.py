num_list = [10, 20, 33, 55, 60, 79, 14]
print('最初のリスト = ', num_list)
max = num_list[0]
for value in num_list:
    if value > max:
        max = value
num_list.remove(max)
print('最大値削除後のリスト = ', num_list)
