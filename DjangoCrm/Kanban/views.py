from django.shortcuts import render
from .models import TodoChild
from django.contrib.auth.models import User
from django.http import HttpResponse


# Create your views here.
def index(request):
    todos = TodoChild.objects.filter(user=request.user)
    return render(request, "board.html", {"list": todos})


def posttodo(request):
    title = request.POST.get("title", "None")
    user = request.user
    TodoChild.objects.create(title=title, user=user)
    todos = TodoChild.objects.filter(user=request.user)
    return render(request, "board.html", {"list": todos})
