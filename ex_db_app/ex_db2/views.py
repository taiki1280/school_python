from django.shortcuts import render
from django.views.generic import TemplateView
from .models import Book
from .forms import IdForm,AuthorForm


def index(request):
    params = {
        'title': '図書管理',
        'message': '全図書',
    }
    if request.method == 'GET':
        params['data'] = Book.objects.all()
        params['id_form'] = IdForm()
        params['author_form'] = AuthorForm()
        return render(request, 'ex_db2/index.html', params)
    elif request.method == 'POST':
        params['id_form'] = IdForm(request.POST)
        params['author_form'] = AuthorForm(request.POST)
        id_num = request.POST['ID']
        # if id_num != '':
            # 検索結果無の時にも対応している
            # data = Book.objects.filter(id=id_num)
            # 配列にしなければならないかつ、検索結果無の時はエラー
            # data = [Book.objects.get(id=id_num)]
        # else:
        #     data = Book.objects.all()
        # 三項演算子
        data = Book.objects.filter(
            id=id_num) if id_num != '' else Book.objects.all()
        params['title'] += '検索結果'
        params['data'] = data
        return render(request, 'ex_db2/index.html', params)