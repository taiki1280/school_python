from django import forms


class Form(forms.Form):
    name = forms.CharField(label='県名')
    population = forms.IntegerField(label='県人口')
    prefecture = forms.CharField(label='県庁所在地')
    population_prefecture = forms.IntegerField(label='県庁所在地人口')
