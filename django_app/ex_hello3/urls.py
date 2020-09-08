from django.urls import path
from . import views

urlpatterns = [
    path('<name>/<int:age>/<birthplace>', views.index, name='index'),
    path('', views.error, name="error")
]
