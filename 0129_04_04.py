# リストのデータを削除すると順番が変わる
# リストの初期化
eto_list = ['子', '丑', '寅', '卯', '辰', '巳',
'午', '未', '申', '酉', '戌', '亥']
# eto_listの１番目の要素をeto_nameへ代入する
eto_name = eto_list[1]
print('remove()実行前の干支リスト１番は', eto_name, 'です。')
# 丑（eto_list[1]）を削除するz
eto_list.remove('丑')
# eto_listの１番目の要素をeto_nameへ代入する
eto_name = eto_list[1]
print('remove()実行後の干支リスト１番は', eto_name, 'です。')