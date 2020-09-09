from django.shortcuts import render
from django_app import urls
from django.views.generic import TemplateView
from .forms import Form


class View(TemplateView):
    def get(self, request):
        self.tmp = {
            "title": "県情報",
            "subtitle": "県情報",
            "msg": "県の基本情報:",
            "form": Form(),
        }
        return render(request, 'ex_forms4/index.html', self.tmp)

    def post(self, request):
        msg = []
        name = f'{request.POST["name"]}'
        population = f'{request.POST["population"]}万人'
        prefecture = f'{request.POST["prefecture"]}市'
        population_prefecture = f'{request.POST["population_prefecture"]}万人'
        msg += [("県名",name)]
        msg += [("県人口",population)]
        msg += [("県庁所在地",prefecture)]
        msg += [("県庁所在地人口",population_prefecture)]
        self.tmp = {
            "title": "県情報",
            "subtitle": "県情報",
            "msg": msg,
            "form": Form(request.POST),
        }
        return render(request, 'ex_forms4/index.html', self.tmp)