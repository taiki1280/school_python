from django.shortcuts import render
from django.views.generic import TemplateView
from .models import Book


def index(request):
    if request.method == 'GET':
        params = {
            'title': '図書管理',
            'message': '全図書',
            'data': Book.objects.all(),
        }
        return render(request, 'ex_db1/index.html', params)
    elif request.method == 'POST':
        id_num = request.POST['ID']
        data = Book.objects.filter(id=id_num)
        params = {'title': '図書管理検索結果', 'message': '全図書', 'data': data}
        return render(request, 'ex_db1/index.html', params)