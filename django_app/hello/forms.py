from django import forms
from .models import Friend


class FriendForm(forms.ModelForm):
    class Meta:
        model = Friend
        fields = ['name', 'mail', 'gender', 'age', 'birthday']


class HelloForm(forms.Form):
    name = forms.CharField(label='Name', \
        widget=forms.TextInput(attrs={'class':'form-control'}))
    mail = forms.EmailField(label='Email', \
        widget=forms.EmailInput(attrs={'class':'form-control'}))
    gender = forms.BooleanField(label='Gender', required=False, \
        widget=forms.CheckboxInput(attrs={'class':'form-check'}))
    age = forms.IntegerField(label='Age', \
        widget=forms.NumberInput(attrs={'class':'form-control'}))
    birthday = forms.DateField(label='Birth', \
        widget=forms.DateInput(attrs={'class':'form-control'}))


class FindForm(forms.Form):
    find = forms.CharField(label='Find', required=False, \
        widget=forms.TextInput(attrs={'class':'form-control'}))


class CheckForm(forms.Form):
    date = forms.DateField(label='Date', input_formats=['%d'], \
        widget=forms.DateInput(attrs={'class':'form-control'}))
    time = forms.TimeField(label='Time', \
        widget=forms.TimeInput(attrs={'class':'form-control'}))
    datetime = forms.DateTimeField(label='DateTime', \
        widget=forms.DateTimeInput(attrs={'class':'form-control'}))