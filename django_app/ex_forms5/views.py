from django.shortcuts import render
from django_app import urls
from django.views.generic import TemplateView
from .forms import Form


class View(TemplateView):
    def get(self, request):
        self.tmp = {"title": "問い合わせフォーム", "form": Form()}
        return render(request, 'ex_forms5/index.html', self.tmp)

    def post(self, request):
        PC = []
        for v in ["Windows10", "Mac", "Linux"]:
            if v in request.POST:
                PC.append(v)
        if len(PC) == 0:
            PC = "ない"
        elif len(PC) == 1:
            PC = PC[0]
        else:
            a = PC[0]
            for i, v in enumerate(PC):
                if i > 0:
                    a += f'と{v}'
            PC = a
        self.tmp = {
            "title": "問い合わせフォーム",
            "name": request.POST["name"],
            "email": request.POST["email"],
            "PC": PC,
        }
        return render(request, 'ex_forms5/index.html', self.tmp)
