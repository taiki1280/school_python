from django.shortcuts import render
from django.views.generic import TemplateView
from .models import Book
from .forms import Form


def index(request):
    params = {
        'title': '図書管理',
        'message': '全図書',
    }
    if request.method == 'GET':
        params['data'] = Book.objects.all()
        params['form'] = Form()
        return render(request, 'ex_db2/index.html', params)
    elif request.method == 'POST':
        params['form'] = Form(request.POST)
        value = request.POST['value']
        # if value != '':
        # 検索結果無の時にも対応している
        # data = Book.objects.filter(id=value)
        # 配列にしなければならないかつ、検索結果無の時はエラー
        # data = [Book.objects.get(id=value)]
        # else:
        #     data = Book.objects.all()
        # 三項演算子
        # data = Book.objects.filter(
        #     id=value) if value != '' else Book.objects.all()

        # 書名で完全一致検索
        # data = Book.objects.filter(
        #     title=value) if value != '' else Book.objects.all()

        # 著書名で曖昧一致検索
        # data = Book.objects.filter(
        #     author__contains=value) if value != '' else Book.objects.all()

        # 価格による値よりも等しいか小さい
        data = Book.objects.filter(
            price__lte=value) if value != '' else Book.objects.all()

        params['title'] += '検索結果'
        params['data'] = data
        return render(request, 'ex_db2/index.html', params)
