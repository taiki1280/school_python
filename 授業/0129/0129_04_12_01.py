# format()メソッドを使った文字列の生成
# 文字列の初期化（名前）
name = 'Yasuhiro Tanaka'
# 整数型変数の初期化（年齢）
age = 27
# 文字列のひな形（テンプレート）を用意する
text_template = '名前は{}です。年齢は{}歳です。'
# format()メソッドでひな形に変数を入れて１つの文字列に連結
text = text_template.format(name, age)
# 表示
print(text)