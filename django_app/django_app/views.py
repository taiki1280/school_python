from django.shortcuts import render
from django.http import HttpResponse
from django_app import urls


def index(request):
    return render(request, 'index.html', {"list": urls.app_name})
