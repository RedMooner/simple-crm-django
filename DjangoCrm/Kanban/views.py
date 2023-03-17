from django.shortcuts import render
from .models import TodoChild


# Create your views here.
def index(request):
    todos = TodoChild.objects.all()
    return render(request, "board.html", {"list": todos})
