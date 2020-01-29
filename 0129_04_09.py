# 様々な引数の例
# 様々な引数の例
# 文字列の初期化
text = 'Hello World!'
# lowerメソッド：すべて小文字に変換した文字列を返す
# 引数なし
low_text = text.lower()
print(low_text) # 表示

# findメソッド：文字列を検索し位置を返す
# 引数１つ
place = text.find('Wo')
print(place) # 表示

# replaceメソッド：文字列を置換し、置換した文字列を返す
# 引数２つ
rep_text = text.replace('World', 'Python')
print(rep_text) # 表示

# replaceメソッドに引数１つはエラーとなる
# text.replace('World')