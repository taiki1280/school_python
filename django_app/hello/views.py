from django.shortcuts import render
from django.shortcuts import redirect
from .models import Friend
# from .forms import HelloForm
from .forms import FriendForm, FindForm
from django.views.generic import ListView, DetailView


# ジェネリックビュー
class FriendList(ListView):
    model = Friend


class FriendDetail(DetailView):
    model = Friend


def index(request):
    data = Friend.objects.all()
    params = {
        'title': 'Hello',
        'data': data,
    }
    return render(request, 'hello/index.html', params)


# create model
def create(request):
    if (request.method == 'POST'):
        obj = Friend()
        friend = FriendForm(request.POST, instance=obj)
        friend.save()
        return redirect(to='/hello')
    params = {
        'title': 'Hello',
        'form': FriendForm(),
    }
    return render(request, 'hello/create.html', params)


def edit(request, num):
    obj = Friend.objects.get(id=num)
    if (request.method == 'POST'):
        friend = FriendForm(request.POST, instance=obj)
        friend.save()
        return redirect(to='/hello')
    params = {
        'title': 'Hello',
        'id': num,
        'form': FriendForm(instance=obj),
    }
    return render(request, 'hello/edit.html', params)


def delete(request, num):
    friend = Friend.objects.get(id=num)
    if (request.method == 'POST'):
        friend.delete()
        return redirect(to='/hello')
    params = {
        'title': 'Hello',
        'id': num,
        'obj': friend,
    }
    return render(request, 'hello/delete.html', params)


def find(request):
    if (request.method == 'POST'):
        form = FindForm(request.POST)
        find = request.POST['find']
        val = find.split()
        # data = Friend.objects.filter(age__gte=val[0], age__lte=val[1])
        # 書き方変更
        data = Friend.objects.filter(age__gte=val[0]).filter(age__lte=val[1])
        msg = 'search result: ' + str(data.count())
    else:
        msg = 'search words...'
        form = FindForm()
        data = Friend.objects.all()
    params = {
        'title': 'Hello',
        'message': msg,
        'form': form,
        'data': data,
    }
    return render(request, 'hello/find.html', params)
