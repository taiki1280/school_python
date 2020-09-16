from django import forms


class ex_db2Form(forms.Form):
    ID = forms.IntegerField(widget=forms.NumberInput,
                            label='ID',
                            required=False)
