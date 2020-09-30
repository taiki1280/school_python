from django.shortcuts import render, redirect
from .models import Kouka2
from .forms import RegistForm, FindForm
from django.db.models import Q

tmp = {'title': '所属学生基本情報'}


# Create your views here.
def index(request):
    tmp['form'] = RegistForm(request.POST)
    tmp['data'] = Kouka2.objects.all()
    return render(request, 'kouka2/index.html', tmp)


def create(request):
    if request.method == 'GET':
        tmp['form'] = RegistForm()
        return render(request, 'kouka2/create.html', tmp)
    elif request.method == 'POST':
        obj = Kouka2()
        register = RegistForm(request.POST, instance=obj)
        register.save()
        return redirect(to='/kouka2')


def edit(request, num):
    obj = Kouka2.objects.get(id=num)
    if request.method == 'GET':
        tmp['id'] = num
        tmp['form'] = RegistForm(instance=obj)
        tmp['data'] = obj
        return render(request, 'kouka2/edit.html', tmp)
    elif request.method == 'POST':
        register = RegistForm(request.POST, instance=obj)
        register.save()
        return redirect(to='/kouka2')


def delete(request, num):
    obj = Kouka2.objects.get(id=num)
    if request.method == 'GET':
        tmp['id'] = num
        tmp['data'] = [('ID', obj.id), ('商品名', obj.Product), ('出産地', obj.Area),
                       ('配送先', obj.Delivery), ('価格', obj.Price),
                       ('添付情報', obj.Attachment)]
        return render(request, 'kouka2/delete.html', tmp)
    elif request.method == 'POST':
        Kouka2.objects.filter(id=num).delete()
        return redirect(to='/kouka2')


def find(request):
    if request.method == 'GET':
        tmp['form'] = FindForm()
        tmp['data'] = Kouka2.objects.all()
    if request.method == 'POST':
        tmp['form'] = FindForm(request.POST)
        value = request.POST['value']
        if request.POST["mode"] == FindForm.mode_list[0]:
            value = value.split()
            tmp['data'] = Kouka2.objects.filter(Price__gte=value[0]).filter(
                Price__lte=value[1])
        elif request.POST["mode"] == FindForm.mode_list[1]:
            tmp['data'] = Kouka2.objects.filter(
                Q(Delivery__contains=value) | Q(Attachment__contains=value))
        elif request.POST["mode"] == FindForm.mode_list[2]:
            values = value.split()
            tmp['data'] = Kouka2.objects.filter(Product__in=values)
        elif request.POST["mode"] == FindForm.mode_list[3]:
            value = value.split()
            tmp['data'] = []
            for v in value:
                tmp['data'] += Kouka2.objects.filter(Attachment__contains=v)
        elif request.POST["mode"] == FindForm.mode_list[4]:
            sql = 'SELECT * FROM kouka2_kouka2'
            if value != "":
                sql += f' WHERE {value}'
            tmp['data'] = Kouka2.objects.raw(sql)
            tmp['msg'] = sql
    return render(request, 'kouka2/find.html', tmp)
