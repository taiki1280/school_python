from django.shortcuts import render, redirect
from django.views.generic import TemplateView
from .forms import RegistForm, FindForm
from .models import Regist
from django.db.models import Q

# Create your views here.
tmp = {"title": "所属学生基本情報"}


def index(request):
    tmp['title'] = "所属学生基本情報"
    tmp['form'] = RegistForm(request.POST)
    tmp['data'] = Regist.objects.all()
    return render(request, 'ex_db2/index.html', tmp)


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
        obj = Regist()
        register = RegistForm(request.POST, instance=obj)
        register.save()
        return redirect(to='/ex_db2')


def edit(request, num):
    obj = Regist.objects.get(id=num)
    if request.method == 'GET':
        tmp['id'] = num
        tmp['form'] = RegistForm(instance=obj)
        tmp['data'] = obj
        return render(request, 'ex_db2/edit.html', tmp)
    elif request.method == 'POST':
        register = RegistForm(request.POST, instance=obj)
        register.save()
        return redirect(to='/ex_db2')


def delete(request, num):
    obj = Regist.objects.get(id=num)
    if request.method == 'GET':
        tmp['id'] = num
        tmp['data'] = [('ID', obj.id), ('氏名', obj.name), ('年齢', obj.age),
                       ('年齢', obj.belong), ('年齢', obj.subject)]
        return render(request, 'ex_db2/delete.html', tmp)
    elif request.method == 'POST':
        Regist.objects.filter(id=num).delete()
        return redirect(to='/ex_db2')


def find(request):
    if request.method == 'GET':
        tmp['form'] = FindForm()
        tmp['data'] = Regist.objects.all()
    if request.method == 'POST':
        tmp['form'] = FindForm(request.POST)
        value = request.POST['value']
        if request.POST["mode"] == FindForm.mode_list[0]:
            value = value.split()
            tmp['data'] = Regist.objects.filter(age__gte=value[0]).filter(
                age__lte=value[1])
        elif request.POST["mode"] == FindForm.mode_list[1]:
            tmp['data'] = Regist.objects.filter(
                Q(belong__contains=value) | Q(subject__contains=value))
        elif request.POST["mode"] == FindForm.mode_list[2]:
            values = value.split()
            tmp['data'] = Regist.objects.filter(name__in=values)
        elif request.POST["mode"] == FindForm.mode_list[3]:
            value = value.split()
            tmp['data'] = []
            for v in value:
                tmp['data'] += Regist.objects.filter(subject__contains=v)
    return render(request, 'ex_db2/find.html', tmp)
