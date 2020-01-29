# データ型によって使えるメソッドが異なる
# メソッドの使用例
# リストの初期化
eto_list = ['子', '丑', '寅']
print(eto_list) # 表示
# リストの値を追加する（appendメソッドを使用）
eto_list.append('卯')
print(eto_list) # 表示
# リストから値を削除する
eto_list.remove('丑')
print(eto_list)

# 文字列の初期化
eto_str = '子丑寅卯辰巳午未申酉戌亥'
# 文字列オブジェクトのfindメソッドに引数'卯'を渡して使用し
# '卯'が含まれる場所を返す
index = eto_str.find('寅')
print('寅の場所 = ', index)
# 文字列オブジェクトのreplaceメソッドに２つの文字列を与えて
# 置換を行い、置換された文字列を返す
replaced = eto_str.replace('子', '猫')
print(replaced)