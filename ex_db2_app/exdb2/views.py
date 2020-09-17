from django.shortcuts import render, redirect
from django.views.generic import TemplateView
from .forms import RegistForm
from .models import Regist

# Create your views here.
tmp = {"title": "所属学生基本情報"}


def create(request):
    if request.method == 'GET':
        tmp['form'] = RegistForm()
        return render(request, 'ex_db2/create.html', tmp)
    elif request.method == 'POST':
        # name = request.POST['name']
        # age = request.POST['age']
        # gender = request.POST['gender']
        # belong = request.POST['belong']
        # subject = request.POST.getlist('subject')
        # register = Regist(name=name,
        #                   age=age,
        #                   gender=gender,
        #                   belong=belong,
        #                   subject=subject)
        t1 = Regist()
        register = RegistForm(request.POST, instance=t1)
        register.save()
        return redirect(to='/ex_db2')


def index(request):
    tmp['title'] = "所属学生基本情報"
    tmp['form'] = RegistForm(request.POST)
    tmp['data'] = Regist.objects.all()
    return render(request, 'ex_db2/index.html', tmp)