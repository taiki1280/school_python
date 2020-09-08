from django.shortcuts import render


def index(request):
    return render(request, 'ex_templates1/index.html')
