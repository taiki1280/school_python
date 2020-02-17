# ファイルをコピーする
# コピー元のファイル名を入力
read_file_name = input('コピー元：')
# コピー先のファイル名を入力
write_file_name = input('コピー先：')
# コピー元のファイルを読み込みモードでオープン
# read_file = open(___ア___, ___イ___, ___ウ___)
read_file = open(read_file_name, "r", encoding="utf-8")
# コピー先ファイルを書き込みモードでオープン
# write_file = open(___エ___, ___オ___, ___カ___)
write_file = open(write_file_name, "w", encoding="utf-8")
# コピー元からデータを読み込む
# raw_data = read_file.___キ___
raw_data = read_file.read()
# コピー先へデータを書き込む
# write_file.___ク___
write_file.write(raw_data)
# ファイルをクローズ
# read_file.___ケ___
read_file.close()
# write_file.___ケ___
write_file.close()
