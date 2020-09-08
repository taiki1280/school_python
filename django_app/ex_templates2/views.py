from django.shortcuts import render


def index(request):
    tmp = {
        "title": "Django Templates",
        "subtitle": "四国の県名",
        "list": ["徳島県", "香川県", "愛媛県", "高知県"]
    }
    return render(request, 'ex_templates2/index.html', tmp)
