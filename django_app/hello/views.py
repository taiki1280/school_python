from django.shortcuts import render
from django.views.generic import TemplateView
from .forms import HelloForm
from .models import Friend


class HelloView(TemplateView):
    def __init__(self):
        self.params = {
            'title': 'Hello',
            'message': 'all friends.',
            'data': Friend.objects.all(),
        }

    def get(self, request):
        return render(request, 'hello/index.html', self.params)
