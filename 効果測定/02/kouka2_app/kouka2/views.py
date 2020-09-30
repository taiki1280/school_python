from django.shortcuts import render, redirect
from .models import Kouka2
from .forms import RegistForm, FindForm
from django.db.models import Q
from django.core.paginator import Paginator

tmp = {}


# Create your views here.
def index(request, num=1):
    tmp['title'] = '農産物商品'
    tmp['form'] = RegistForm(request.POST)
    # data = Kouka2.objects.all()
    # 辞書型でデータを受け取る
    data = Kouka2.objects.values()
    page = Paginator(data, 3)
    tmp['data'] = page.get_page(num)

    # 自作
    # 項目の名前を配列に格納
    value_head = ['項目数', '価格合計', '価格平均', '価格最小値', '価格最高値']
    # それぞれのデータをリストで受け取る
    price_list = Kouka2.objects.values_list('Price', flat=True)
    # 項目数（配列の個数）
    num = len(price_list)
    # 価格の合計（配列の合計値）
    sum_price = 0
    for v in price_list:
        sum_price += v
    # 価格の平均（配列の合計値 ÷ 個数）
    # 問題の少数は第四位までしかないため４桁に丸め込み
    ave_price = round(sum_price / num, 4)
    # 価格の最小値（配列の内の最小値）
    min_price = min(price_list)
    # 価格の最大値（配列の内の最大値）
    max_price = max(price_list)
    # 処理結果をすべてリスト化する
    values = [num, sum_price, ave_price, min_price, max_price]
    # それぞれの項目名と処理データのリストをタプルで結合してリスト化する
    tmp['value'] = [(k, v) for k, v in zip(value_head, values)]

    return render(request, 'kouka2/index.html', tmp)


def create(request):
    tmp['title'] = '農産物商品追加'
    if request.method == 'GET':
        tmp['form'] = RegistForm()
        return render(request, 'kouka2/create.html', tmp)
    elif request.method == 'POST':
        obj = Kouka2()
        register = RegistForm(request.POST, instance=obj)
        register.save()
        return redirect(to='/kouka2')


def edit(request, num):
    tmp['title'] = '農産物商品編集'
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
    tmp['title'] = '農産物商品削除'
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
    tmp['title'] = '農産物商品検索'
    if request.method == 'GET':
        tmp['form'] = FindForm()
        tmp['data'] = Kouka2.objects.all()
    if request.method == 'POST':
        tmp['form'] = FindForm(request.POST)
        value = request.POST['value']
        # 今までの機能を無効化
        # if request.POST["mode"] == FindForm.mode_list[0]:
        #     value = value.split()
        #     tmp['data'] = Kouka2.objects.filter(Price__gte=value[0]).filter(
        #         Price__lte=value[1])
        # elif request.POST["mode"] == FindForm.mode_list[1]:
        #     tmp['data'] = Kouka2.objects.filter(
        #         Q(Delivery__contains=value) | Q(Attachment__contains=value))
        # elif request.POST["mode"] == FindForm.mode_list[2]:
        #     values = value.split()
        #     tmp['data'] = Kouka2.objects.filter(Product__in=values)
        # elif request.POST["mode"] == FindForm.mode_list[3]:
        #     value = value.split()
        #     tmp['data'] = []
        #     for v in value:
        #         tmp['data'] += Kouka2.objects.filter(Attachment__contains=v)
        # elif request.POST["mode"] == FindForm.mode_list[4]:
        #     sql = 'SELECT * FROM kouka2_kouka2'
        #     if value != "":
        #         sql += f' WHERE {value}'
        #     tmp['data'] = Kouka2.objects.raw(sql)
        #     tmp['msg'] = sql
        sql = 'SELECT * FROM kouka2_kouka2'
        if value != "":
            sql += f' WHERE {value}'
        tmp['data'] = Kouka2.objects.raw(sql)
        tmp['sql'] = sql
    return render(request, 'kouka2/find.html', tmp)


def check(request):
    tmp['title'] = '農産物商品チェック'
    tmp['message'] = 'check validation.'
    tmp['form'] = RegistForm()
    if (request.method == 'POST'):
        obj = Kouka2()
        form = RegistForm(request.POST, instance=obj)
        tmp['form'] = form
        if (form.is_valid()):
            tmp['message'] = '問題ありません'
        else:
            tmp['message'] = '入力データに誤りがあります.'
    return render(request, 'kouka2/check.html', tmp)