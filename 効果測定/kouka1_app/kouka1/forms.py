from django import forms


class Kouka1Form(forms.Form):
    氏名 = forms.CharField(
        label='氏名', widget=forms.TextInput(attrs={"class": "form-control"}))
    年齢 = forms.IntegerField(
        label='年齢', widget=forms.NumberInput(attrs={"class": "form-control"}))
    sex = ["男性", "女性", "未回答"]
    性別 = forms.ChoiceField(label='性別',
                           widget=forms.RadioSelect,
                           choices=[(v, v) for v in sex])
    couse = ["システム開発コース", "ネットワークセキュリティコース", "AI・データサイエンスコース", "高度情報システムコース"]
    所属コース = forms.ChoiceField(label='所属コース',
                              widget=forms.Select,
                              choices=[(v, v) for v in couse])
