from django import forms


class Form(forms.Form):
    name = forms.CharField(
        label='商品名', widget=forms.TextInput(attrs={"class": "form-control"}))
    num = forms.EmailField(
        label='数量', widget=forms.EmailInput(attrs={"class": "form-control"}))
    Windows10 = forms.BooleanField(label='領収書の有無, required=False)
    Mac = forms.BooleanField(label='Mac', required=False)
    Linux = forms.BooleanField(label='Linux', required=False)
