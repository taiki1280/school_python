from django.shortcuts import render
from django_app import urls
from django.views.generic import TemplateView
from .forms import Form


class View(TemplateView):
    def get(self, request):
        self.tmp = {
            "title": "県情報",
            "subtitle": "県情報",
            "msg": ["県の基本情報:"],
            "form": Form(),
            "goto": "POST"
        }
        return render(request, 'ex_forms2/index.html', self.tmp)

    def post(self, request):
        msg = []
        name = f'{request.POST["name"]}'
        # 都道府県で分岐
        # if name == '東京':
        #     name += '都'
        # elif name == '北海':
        #     name += '道'
        # elif name in ['大阪','京都']:
        #     name += '府'
        # else :
        #     name += '県'
        population = f'{request.POST["population"]}万人'
        prefecture = f'{request.POST["prefecture"]}市'
        population_prefecture = f'{request.POST["population_prefecture"]}万人'
        msg += [f'県名:{name}']
        msg += [f'県人口:{population}']
        msg += [f'県庁所在地:{prefecture}']
        msg += [f'県庁所在地人口:{population_prefecture}']
        # 必要な内容を配列に格納
        # kind = ["県名", "県人口", "県庁所在地", "県庁所在地人口"]
        # POSTの中身をすべて回す
        # for i, v in enumerate(request.POST):
            # if i != 0:
                # 数字には万人を
                # if not (i % 2):
                #     msg[kind[i - 1]] = f'{request.POST[v]}'
                # else:
                #     msg[kind[i - 1]] = request.POST[v]
        self.tmp = {
            "title": "県情報",
            "subtitle": "県情報",
            "msg": msg,
            "form": Form(request.POST),
            "goto": "GET",
        }
        return render(request, 'ex_forms2/index.html', self.tmp)