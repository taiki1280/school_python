from django.shortcuts import render
from django_app import urls
from django.views.generic import TemplateView
from .forms import Form


class View(TemplateView):
    def get(self, request):
        self.tmp = {"title": "商品発送", "form": Form()}
        return render(request, 'ex_forms6/index.html', self.tmp)

    def post(self, request):
        forms = ["商品名", "個数", "領収書の有無", "送付方法"]
        form = {}
        for v in forms:
            form[v] = ""
        for v in forms:
            if v in request.POST:
                form[v] = request.POST[v]
        if form["領収書の有無"] == "on":
            form["領収書の有無"] = "有"
        else:
            form["領収書の有無"] = "無"
        tmp = {"title": "商品発送", "form": form}
        return render(request, 'ex_forms6/index.html', tmp)
