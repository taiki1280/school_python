from django import forms
from .models import Regist


class RegistForm(forms.ModelForm):
    genders = ["男性", "女性", "未回答"]
    couse = ["システム開発", "AIデータサイエンス", "高度システム開発", "ネットワークセキュリティ"]
    subjects = [
        "Python", "JavaScript", "Java", "PHP", "C言語", "Go言語", "オブジェクト指向設計",
        "ディープラーニング", "データサイエンス", "ネットワークプログラミング", "セキュアプログラミング",
        "クラウドネイティブプログラミング"
    ]
    name = forms.CharField(label='氏名', widget=forms.TextInput())
    age = forms.IntegerField(label='年齢', widget=forms.NumberInput())
    gender = forms.ChoiceField(choices=[(v, v) for v in genders],
                               label='性別',
                               widget=forms.RadioSelect())
    belong = forms.ChoiceField(choices=[(v, v) for v in couse],
                               label='所属コース',
                               widget=forms.Select())

    subject = forms.MultipleChoiceField(
        choices=[(v, v) for v in subjects],
        label='選択科目',
        widget=forms.SelectMultiple(attrs={'size': len(subjects)}))

    class Meta:
        model = Regist
        fields = ['name', 'age', 'gender', 'belong', 'subject']


class FindForm(forms.Form):
    mode_list = ["年齢以上以下", "コース・選択科目", "名前複数検索", "選択科目複数選択", "SQL Where句"]
    mode = forms.ChoiceField(choices=[(v, v) for v in mode_list],
                             widget=forms.Select(),
                             label='検索方法')
    value = forms.CharField(widget=forms.TextInput,
                            required=False,
                            label='入力せよ')
