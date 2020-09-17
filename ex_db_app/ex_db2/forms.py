from django import forms


class IdForm(forms.Form):
    ID = forms.IntegerField(widget=forms.NumberInput,
                            label='ID',
                            required=False)
class AuthorForm(forms.Form):
    author = forms.CharField(widget=forms.TextInput,
                            label='author',
                            required=False)
