from django.db import models
from django.contrib.auth.models import User  # new


# Create your models here.
class TodoChild(models.Model):
    title = models.CharField(max_length=30, help_text="Enter a todo title")
    description = models.TextField(max_length=255,help_text="Enter a todo description",null=True)
    creation_date = models.DateTimeField(null=True);
    user = models.ForeignKey(User, on_delete=models.CASCADE)  # newull=True,

    def __unicode__(self):
        return self.user.id

    def __str__(self):
        return self.title
    class Meta:
        verbose_name = 'Спиоск дел'
        verbose_name_plural = 'Сипсок дел'
