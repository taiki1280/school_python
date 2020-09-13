"""django_app URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.0/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include
from django_app import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index')
]

# アプリケーションの名前を一元管理してみる
jissyu = [
    "ex_hello1", "ex_hello2", "ex_hello3", "ex_templates1",
    "ex_templates2", "ex_templates3", "ex_forms1", "ex_forms2", "ex_forms3",
    "ex_forms4", "ex_forms5", "ex_forms6"
]

lesson = ["hello"]

app_name = lesson

for v in app_name:
    urlpatterns.append(path(f'{v}/', include(f'{v}.urls')))
