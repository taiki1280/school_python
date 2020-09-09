from django.urls import path
from .views import ex_forms2_view as views

urlpatterns = [
    path('', views.as_view(), name='index'),
]