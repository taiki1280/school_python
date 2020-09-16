from django.conf.urls import url
from . import views

urlpatterns = [
    url('create', views.create, name='create'),
    url('', views.index, name='index'),
]