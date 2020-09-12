from django import forms


class Form(forms.Form):
    商品名 = forms.CharField(
        label='商品名', widget=forms.TextInput(attrs={"class": "form-control"}))
    # choices = [(v+1, v+1) for v in range(10)]
    個数 = forms.ChoiceField(
        label='数量', widget=forms.Select, choices=[(v+1, v+1) for v in range(10)])
    # label='数量', widget=forms.Select, choices=choices)
    領収書の有無 = forms.BooleanField(label='領収書の有無', required=False)
    送付方法 = forms.ChoiceField(
        label='送付方法', widget=forms.RadioSelect, choices=[(v, v) for v in ["宅配便", "メール便", "冊子小包"]])
