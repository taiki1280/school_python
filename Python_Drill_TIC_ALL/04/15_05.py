# ファイル名を入力し、そのファイルへの追加書き込み
# 書き込むファイル名を入力
file_name = input('ファイル名：')
# ファイルを追加モードでオープン
# write_file = open(___ア___, ___イ___)
write_file = open(file_name, "a")
# 行番号を初期化
line_number = 1
# 文字列「end」が入力されるまで繰り返す
# while ___ウ___:
while True:
    # キーボードから文字列を入力
    input_str = input('入力：')
    # 「end」が入力されたかを判断
    # if ___エ___:
    if input_str == "end":
        # 無限ループより抜ける
        # ___オ___
        break
    # オープンしたファイルに行番号付きで書き込む
    # write_file.___カ___(___キ___ + ' : ' + input_str + '¥n')
    write_file.write(str(line_number) + ' : ' + input_str + '\n')
    # 行番号をインクリメント
    # ___ク___
    line_number += 1
# ファイルをクローズ
# write_file.___ケ___
write_file.close()
print('書き込み終了')
