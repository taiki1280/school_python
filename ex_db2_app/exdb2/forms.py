from django import forms
from .models import Regist


class RegistForm(forms.ModelForm):
    class Meta:
        model = Regist
        fields = ['name', 'age', 'gender', 'belong', 'subject']


class Form(forms.Form):
    氏名 = forms.CharField(label='氏名', widget=forms.TextInput())
    年齢 = forms.IntegerField(label='年齢', widget=forms.NumberInput())
    性別 = forms.ChoiceField(choices=[(v, v) for v in Regist.genders],
                           label='性別',
                           widget=forms.RadioSelect())
    所属コース = forms.ChoiceField(choices=[(v, v) for v in Regist.couse],
                              label='所属コース',
                              widget=forms.Select())

    選択科目 = forms.MultipleChoiceField(choices=[(v, v) for v in Regist.subjects],
                                     label='選択科目',
                                     widget=forms.SelectMultiple())
