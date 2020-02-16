# 指定したファイルを読み込み
# 行番号付きで表示する
# 読み込むファイルを入力
file_name = input('ファイル名 = ')
# 指定したファイルを読み込みモードでオープン
# read_file = open(___ア___, ___イ___)
read_file = open("person_15_06.txt", "r")
# ファイルからデータを読み込む
# raw_data = read_file.___ウ___
raw_data = read_file.read()
# ファイルをクローズ
# read_file.___エ___
read_file.close()
# 読み込んだデータを改行で区切る
read_line = raw_data.splitlines()
# 行番号を初期化する
line_number = 1
# 行数分繰り返す
# for ___カ___:
for value in read_line:
    # 読み込んだ行に行番号を付ける
    disp_line = f"{line_number} ： {value}"
    # 表示
    print(disp_line)
    # 行番号をインクリメント
    line_number += 1
