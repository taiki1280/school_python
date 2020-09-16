from django.db import models


class Book(models.Model):
    title = models.CharField(max_length=100)
    author = models.CharField(max_length=100)
    # 本 true
    isBook = models.BooleanField()
    isbn = models.IntegerField(default=0)
    price = models.IntegerField(default=0)

    def __str__(self):
        return f'{self.id:02}: {self.title}'
