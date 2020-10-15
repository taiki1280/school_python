from django.shortcuts import render
from django.http import JsonResponse
import uuid


def index(request):
    UUID = str(uuid.uuid4())
    request.session.flush()
    request.session['UUID'] = UUID

    return render(request, "index.html")
    # response = {
    #     "title": "index",
    # }
    # return JsonResponse(response, safe=False)


def get(request):
    response = {
        "title": "REST API",
        "message": "GET処理",
        "UUID": request.session['UUID'] if ("UUID" in request.session) else "Nothing",
        "CSRF": request.COOKIES['csrftoken'] if ("csrftoken" in request.COOKIES) else "Nothing",
        "name" : "Ryo"
    }
    return JsonResponse(response, safe=False)


def add(request):
    response = {
        "title": "REST API",
        "message": "POST処理",
        "UUID": request.session['UUID'] if ("UUID" in request.session) else "Nothing",
        "CSRF": request.COOKIES['csrftoken'] if ("csrftoken" in request.COOKIES) else "Nothing",
    }
    return JsonResponse(response, safe=False)


def edit(request):
    response = {
        "title": "REST API",
        "message": "PUT処理",
        "UUID": request.session['UUID'] if ("UUID" in request.session) else "Nothing",
        "CSRF": request.COOKIES['csrftoken'] if ("csrftoken" in request.COOKIES) else "Nothing",
    }
    return JsonResponse(response, safe=False)


def remove(request):
    response = {
        "title": "REST API",
        "message": "DELETE処理",
        "UUID": request.session['UUID'] if ("UUID" in request.session) else "Nothing",
        "CSRF": request.COOKIES['csrftoken'] if ("csrftoken" in request.COOKIES) else "Nothing",
    }
    return JsonResponse(response, safe=False)