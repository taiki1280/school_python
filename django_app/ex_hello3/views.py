from django.shortcuts import render


def index(request, name, age, birthplace):
    # 1都1道2府43県で場合分け
    if birthplace == "東京":
        birthplace += "都"
    elif birthplace == "北海":
        birthplace += "道"
    elif birthplace in ["大阪", "京都"]:
        birthplace += "府"
    else:
        birthplace += "県"
    return render(request, 'ex_hello3/index.html', {
        "name": name,
        "age": age,
        "birthplace": birthplace
    })
