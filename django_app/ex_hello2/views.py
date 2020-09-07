from django.shortcuts import render
from django.http import HttpResponse

def index(request):
    name = request.GET['name']
    age = request.GET['age']
    # return HttpResponse("aaa")
    return render(request, 'ex_hello2/index.html', {"name": name, "age": age})
