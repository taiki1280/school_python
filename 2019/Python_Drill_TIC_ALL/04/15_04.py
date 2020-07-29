# ファイルに書き込む
# ファイル data.txt を書き込みモードでオープン
# write_file = open(___ア___, ___イ___)
write_file = open("data_15_04.txt", "w")
# 行番号を初期化
line_number = 1
# キーボードから文字列「end」が入力されるまで繰り返す
# while ___ウ___:
while True:
    str_data = input('入力：')
    # end が入力されたら無限ループより抜ける
    # if ___エ___:
    if str_data == "end":
        # ___オ___
        break
    # 行番号付きで書き込む
    # write_file.___カ___(___キ___ + ' : ' + str_data + '¥n')
    write_file.write(str(line_number) + ' : ' + str_data + '\n')
    # 行番号をインクリメント
    # ___ク___
    line_number += 1
# ファイルをクローズ
# write_file.___ケ___
write_file.close()
print('書き込み終了')
