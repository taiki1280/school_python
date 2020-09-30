from django.urls import path
from .views import Kouka1View

urlpatterns = [
    path('', Kouka1View.as_view(), name='index'),
]