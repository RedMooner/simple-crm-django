from django.shortcuts import render
from .models import TodoChild
from django.contrib.auth.models import User


# Create your views here.
def index(request):
    todos = TodoChild.objects.filter(user=request.user)
    return render(request, "board.html", {"list": todos})
