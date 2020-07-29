# ファイルからデータを読み込む
# split メソッドを使用して読み込んだデータを分割
# ファイル parson.txt を読み込みモードでオープン
# read_file = open(___ア___, ___イ___)
read_file = open("person_15_06.txt", "r")
# ファイルからデータを読み込む
# raw_data = read_file.___ウ___
raw_data = read_file.read()
# ファイルをクローズする
# read_file.___エ___
read_file.close()
# 読み込んだデータを「、」で区切る
# str_data = raw_data.___オ___
str_data = raw_data.splitlines()
# 表示する
print(str_data)
