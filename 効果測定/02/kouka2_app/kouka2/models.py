from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator


class Kouka2(models.Model):
    Product = models.CharField(max_length=1000)
    Area = models.CharField(max_length=1000)
    Delivery = models.CharField(max_length=1000)
    Price = models.IntegerField(
        default=0, validators=[MinValueValidator(0),
                               MaxValueValidator(8000)])
    Attachment = models.CharField(max_length=1000)

    def __str__(self):
        return f'{self.id:02}: {self.Product} {self.Area} {self.Delivery} {self.Price} {self.Attachment}'