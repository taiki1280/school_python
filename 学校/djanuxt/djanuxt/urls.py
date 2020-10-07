"""djanuxt URL Configuration

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
from django.urls import path, re_path  # re_path追加
from . import views
from .nuxt import NuxtView

urlpatterns = [
    path('admin/', admin.site.urls),

    # Nuxt
    re_path(r'^nuxt/$', NuxtView.as_view(), name='nuxt'),
    # re_path(r'^nuxt/(?P\w+)', NuxtView.as_view()),
    re_path(r'^nuxt/', NuxtView.as_view()),
    
    # Django Top Page
    path('', views.index, name='index'),

    # API
    path('api/get/', views.get, name='get'),
    path('api/add/', views.add, name='add'),
    path('api/edit/', views.edit, name='edit'),
    path('api/remove/', views.remove, name='remove'),
]
