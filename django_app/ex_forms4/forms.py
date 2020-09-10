from django import forms


class Form(forms.Form):
    def __init__(self, *args, **kwargs):
        super(Form, self).__init__(*args, **kwargs)
        for field in self.fields.values():
            field.widget.attrs["class"] = "form-control"

    name = forms.CharField(label='県名')
    population = forms.IntegerField(label='県人口')
    prefecture = forms.CharField(label='県庁所在地')
    population_prefecture = forms.IntegerField(label='県庁所在地人口')
