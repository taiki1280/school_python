from django.shortcuts import render


def index(request):
    params = {
        'title':'Hello/Index',
        'msg':'これは、サンプルで作ったページです。',
    }
    return render(request, 'hello/index.html', params)