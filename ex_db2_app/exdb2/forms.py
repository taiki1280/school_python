from django import forms
from .models import Regist


class RegistForm(forms.ModelForm):
    name = forms.CharField(label='氏名', widget=forms.TextInput())
    age = forms.IntegerField(label='年齢', widget=forms.NumberInput())
    gender = forms.ChoiceField(choices=[(v, v) for v in Regist.genders],
                               label='性別',
                               widget=forms.RadioSelect())
    belong = forms.ChoiceField(choices=[(v, v) for v in Regist.couse],
                               label='所属コース',
                               widget=forms.Select())

    subject = forms.MultipleChoiceField(
        choices=[(v, v) for v in Regist.subjects],
        label='選択科目',
        widget=forms.SelectMultiple(attrs={'size': len(Regist.subjects)}))

    class Meta:
        model = Regist
        fields = ['name', 'age', 'gender', 'belong', 'subject']
        widgets = {
            'gender': forms.RadioSelect(),
            'belong': forms.Select(),
            'subject':
            forms.SelectMultiple(attrs={'size': len(Regist.subjects)})
        }
