from django.shortcuts import render
from django.http import HttpResponse


def index(request):
    if 'name' in request.GET and 'age' in request.GET:
        name = request.GET['name']
        age = request.GET['age']
        return render(request, 'ex_hello2/index.html', {
            "name": name,
            "age": age
        })
    else:
        return HttpResponse("<h1>?name=&age=の形にしてください<h1>")