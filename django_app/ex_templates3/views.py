from django.shortcuts import render


def index(request):
    tmp = {
        "title": "Django Templates",
        "subtitle": "東北の県名",
        "list": ["青森県", "岩手県", "秋田県", "宮城県", "山形県", "福島県"],
        "goto": "next"
    }
    return render(request, 'ex_templates3/index.html', tmp)


def next(request):
    tmp = {
        "title": "Django Templates",
        "subtitle": "東北の県庁所在地名",
        "list": ["青森県", "岩手県", "秋田県", "宮城県", "山形県", "福島県"],
        "goto": "index"
    }
    return render(request, 'ex_templates3/index.html', tmp)
