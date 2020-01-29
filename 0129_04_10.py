# 引数の個数によって振る舞いが変わる例

# 文字列の初期化
text = 'spam spam spam'
print(text) # 表示
# すべて置換して表示
print(text.replace('spam', 'ham'))
# １つだけ置換して表示
print(text.replace('spam', 'ham', 1))
# ２つ置換して表示
print(text.replace('spam', 'ham', 2))