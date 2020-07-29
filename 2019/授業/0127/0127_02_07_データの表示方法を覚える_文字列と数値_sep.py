# Syntax
# print(*objects, sep=' ', end='¥n', file=sys.stdout, flush=False)
# １．基本的な使い方
print("Hello world.")
print(10000)
print("Hello",1000)
print("東京", "情報クリエイター", "工学院", "専門学校")
# ２．区切り文字の変更
print("東京", "情報クリエイター", "工学院", "専門学校", sep = '+')
print("東京", "情報クリエイター", "工学院", "専門学校", sep = '*')
print("東京", "情報クリエイター", "工学院", "専門学校", sep = '')
# ３．print関数を実行したとき改行しないようにする
# デフォルト＝改行
print("大原")
print("学園")
# 改行しないようにする
print("大原", end = '')
print("学園")
# ４．ファイルへ出力する
out_file = open("out_text.txt", "w")
print("Hello world.", file = out_file)
out_file.close()