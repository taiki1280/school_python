from django.shortcuts import render
from django.http import HttpResponse


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


def error(request):
    return HttpResponse("<h1>name/int:age/birthplaceの形で追記してください</h1>")
