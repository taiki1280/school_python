from django import forms


class Form(forms.Form):
    # value = forms.IntegerField(widget=forms.NumberInput,
    #                            label='value',
    #                            required=False)
    value = forms.Field(widget=forms.TextInput, label='value', required=False)
