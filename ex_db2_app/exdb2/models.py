from django.db import models


class Regist(models.Model):
    name = models.CharField(max_length=100)
    age = models.IntegerField(default=0)
    gender = models.CharField(max_length=100, default=1)
    belong = models.CharField(max_length=100, default=1)
    subject = models.CharField(max_length=300)

    def __str__(self):
        return f'{self.id:02}: {self.name} {self.gender} {self.belong} {self.subject}'