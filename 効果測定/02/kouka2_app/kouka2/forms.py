from django import forms
from .models import Kouka2


class RegistForm(forms.ModelForm):
    Product = forms.CharField(label='商品名', widget=forms.TextInput())
    Area_list = [
        '北海道', '東北', '関東', '東海', '甲信越', '中部', '北陸', '関西', '山陽', '山陰', '四国',
        '九州', '沖縄'
    ]
    Area = forms.ChoiceField(label='生産性',
                             widget=forms.Select(),
                             choices=[(v, v) for v in Area_list])

    Delivery_list = ['店舗', '農協', '配送センター', '個人']
    Delivery = forms.ChoiceField(
        label='配送先',
        widget=forms.RadioSelect(),
        choices=[(v, v) for v in Delivery_list],
    )
    Price = forms.IntegerField(label='価格', widget=forms.NumberInput())
    Attachment_list = ['生産者名', '栄養価', '使用農薬', '効能', '関連商品', '問い合わせ先', 'その他']
    Attachment = forms.MultipleChoiceField(label='添付情報',
                                           widget=forms.SelectMultiple(),
                                           choices=[(v, v)
                                                    for v in Attachment_list])

    class Meta:
        model = Kouka2
        fields = ['Product', 'Area', 'Delivery', 'Price', 'Attachment']


class FindForm(forms.Form):
    mode_list = ["価格以上以下", "配送先・添付情報", "商品名複数検索", "添付情報複数選択", "SQL文"]
    mode = forms.ChoiceField(choices=[(v, v) for v in mode_list],
                             widget=forms.Select(),
                             label='検索方法')
    value = forms.CharField(widget=forms.TextInput,
                            required=False,
                            label='入力せよ')