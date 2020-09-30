from django.http import HttpResponse


def index(request):
    return HttpResponse("<h1><a href='/kouka1'>効果測定のページへ</a></h1>")
