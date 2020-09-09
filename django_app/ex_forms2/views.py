from django.shortcuts import render
from django_app import urls
from django.views.generic import TemplateView
from .forms import ex_forms2_form


class ex_forms2_view(TemplateView):
    def __init__(self):
        self.tmp = {
            "title": "県情報",
            "subtitle": "県情報",
            "msg": ["県の基本情報"],
            "form": ex_forms2_form(),
            "goto": "post"
        }

    def get(self, request):
        return render(request, 'ex_forms2/index.html', self.tmp)

    def post(self, request):
        kind = ["県名", "県人口", "県庁所在地", "県庁所在地人口"]
        msg = {}
        # name = request.POST["name"]
        # population = request.POST["population"]
        # prefecture = request.POST["prefecture"]
        # population_prefecture = request.POST["population_prefecture"]
        for i, v in enumerate(request.POST):
            if i != 0:
                if not (i % 2):
                    msg[kind[i - 1]] = f'{request.POST[v]}万人'
                else:
                    msg[kind[i - 1]] = request.POST[v]

        # msg = [f'県名:{name}']
        # msg += [f'県人口:{population}']
        # msg += [f'県庁所在地:{prefecture}']
        # msg += [f'県庁所在地人口:{population_prefecture}']
        self.tmp = {
            "title": "県情報",
            "subtitle": "県情報",
            "msg": msg,
            "form": ex_forms2_form(request.POST),
            "goto": "get",
        }
        return render(request, 'ex_forms2/index.html', self.tmp)