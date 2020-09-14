from django.shortcuts import render
from kouka1_app import urls
from django.views.generic import TemplateView
from .forms import Kouka1Form


# Create your views here.
class Kouka1View(TemplateView):
    def __init__(self):
        self.params = {
            'title': '所属コース個人情報',
            'form': Kouka1Form(),
        }

    def get(self, request):
        return render(request, 'kouka1/index.html', self.params)

    def post(self, request):
        msg = {}
        forms = ["氏名", "年齢", "性別", "所属コース"]
        for v in forms:
            msg[v] = ""
        for v in forms:
            if v in request.POST:
                msg[v] = request.POST[v]
        self.params = {
            'title': '所属コース個人情報',
            'form': Kouka1Form(request.POST),
            'msg': msg
        }
        return render(request, 'kouka1/index.html', self.params)
