# ファイルからのデータの読み込み
# ファイル person.txt を読み込みモードでオープン
# read_file = open(___ア___, ___イ___)
read_file = open("person_15_06.txt", "r")
# ファイルからデータを読み込む
# raw_data = read_file.___ウ___
raw_data = read_file.read()
# ファイルをクローズする
# read_file.___エ___
read_file.close()
# 読み込んだデータを表示する
print(raw_data)
