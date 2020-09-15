from django.shortcuts import render
from django.views.generic import TemplateView
from .models import Book


def index(request):
    params = {
        'title': 'Hello',
        'message': 'all friends.',
        'data': Book.objects.all(),
    }
    return render(request, 'ex_db1/index.html', params)