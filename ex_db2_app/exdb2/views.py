from django.shortcuts import render, redirect
from django.views.generic import TemplateView
from .forms import RegistForm, FindForm
from .models import Regist
from django.db.models import Q
from django.db.models import Avg, Sum, Count, Max, Min

# Create your views here.
tmp = {"title": "所属学生基本情報"}


def index(request):
    tmp['title'] = "所属学生基本情報"
    tmp['form'] = RegistForm(request.POST)
    tmp['data'] = Regist.objects.all()
    value_head = ['項目数', '年齢合計', '年齢平均', '年齢最小値', '年齢最高値']
    # 項目数
    # 教科書
    # items = []
    # items = Regist.objects.aggregate(Count('age'))
    # items += Regist.objects.aggregate(Avg('age'))
    # items += Regist.objects.aggregate(Sum('age'))
    # items += Regist.objects.aggregate(Max('age'))
    # items += Regist.objects.aggregate(Min('age'))
    # tmp['value'] = [(k, v) for k, v in items.items()]

    # 自作
    age_list = Regist.objects.values_list('age', flat=True)
    num = len(age_list)
    sum_age = 0
    for v in age_list:
        sum_age += v
    ave_age = sum_age / num
    min_age = min(age_list)
    max_age = max(age_list)
    values = [num, sum_age, ave_age, min_age, max_age]
    tmp['value'] = [(k, v) for k, v in zip(value_head, values)]
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
        elif request.POST["mode"] == FindForm.mode_list[4]:
            sql = 'SELECT * FROM exdb2_regist'
            if value != "":
                sql += f' WHERE {value}'
            tmp['data'] = Regist.objects.raw(sql)
            tmp['msg'] = sql
    return render(request, 'ex_db2/find.html', tmp)


def check(request):
    tmp['message'] = 'check validation.'
    tmp['form'] = RegistForm(),
    if (request.method == 'POST'):
        obj = Regist()
        form = RegistForm(request.POST, instance=obj)
        tmp['form'] = form
        if (form.is_valid()):
            tmp['message'] = 'OK!'
        else:
            tmp['message'] = 'no good.'
    return render(request, 'ex_db2/check.html', tmp)