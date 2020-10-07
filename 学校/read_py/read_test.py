import csv


def get_data(num_list):
    times = []
    with open('test.csv', encoding='UTF-8') as f:
        reader = csv.reader(f)
        for i, row in enumerate(reader):
            if i == 1:
                title = [row[num_list[0]], row[num_list[1]].replace("\n", "")]
            elif not '' in row[num_list[0]:num_list[1] + 1]:
                times += [{
                    title[0]: row[num_list[0]],
                    title[1]: row[num_list[1]]
                }]
    for v in times:
        print(v)


get_data([13, 14])
