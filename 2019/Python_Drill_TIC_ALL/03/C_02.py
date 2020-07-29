num_list = [10, -15, 20, -40, 95]
total = 0
average = 0
for value in num_list:
    total += value
average = total / len(num_list)
print('num_list =', num_list)
print('合計 = {}、平均 = {}'.format(total, average))
