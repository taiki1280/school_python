from django.shortcuts import render
from django_app import urls
from django.views.generic import TemplateView
from .forms import Form


class View(TemplateView):
    def get(self, request):
        self.tmp = {"title": "商品発送", "form": Form()}
        return render(request, 'ex_forms5/index.html', self.tmp)

    def post(self, request):
        return render(request, 'ex_forms5/index.html', self.tmp)
