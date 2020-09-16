from django.shortcuts import render
from django.views.generic import TemplateView
from .forms import Form, RegistForm
from .models import Regist

# Create your views here.
tmp = {"title": "所属学生基本情報"}


def create(request):
    tmp['form'] = Form()
    return render(request, 'exdb2/create.html', tmp)


def index(request):
    t1 = Regist()
    t = RegistForm(request.POST, instance=t1)
    t.save()
    tmp['title'] = "所属学生基本情報"
    tmp['form'] = Form(request.POST)
    tmp['data'] = Regist.objects.all()
    return render(request, 'exdb2/index.html', tmp)