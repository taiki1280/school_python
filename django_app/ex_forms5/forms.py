from django import forms


class Form(forms.Form):
    name = forms.CharField(
        label='name', widget=forms.TextInput(attrs={"class": "form-control"}))
    email = forms.EmailField(label='email')
    # @存在エラーが出ない
    # email = forms.EmailField(
    #     label='email', widget=forms.TextInput(attrs={"class": "form-control"}))
    Windows10 = forms.BooleanField(label='Windows10', required=False)
    Mac = forms.BooleanField(label='Mac', required=False)
    Linux = forms.BooleanField(label='Linux', required=False)
