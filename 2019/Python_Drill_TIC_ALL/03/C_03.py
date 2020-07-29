num_list = [10, -15, 20, -40, 95]

max = num_list[0]
min = num_list[0]

for value in num_list:
    if max < value:
        max = value
    if min > value:
        min = value
print("num_list = ", num_list)
print('最大値 = {}、最小値 = {}'.format(max, min))
