from django.shortcuts import render
from django_app import urls


def index(request):
    tmp = {
        "title": "ex_forms1/index",
        "subtitle": "ex_forms1/index",
        "msg": "文字列を入力してください"
    }
    return render(request, 'ex_forms1/index.html', tmp)


def form(request):
    msg = request.POST["msg"]
    tmp = {
        "title": "ex_forms1/form",
        "subtitle": "ex_forms1/form",
        "msg": f'入力文字列 = {msg}、長さ = {len(msg)}'
    }
    return render(request, 'ex_forms1/index.html', tmp)