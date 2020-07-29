# ファイルに書き込む
# ファイル data.txt を書き込みモードでオープン
# write_file = open(___ア___, ___イ___)
write_file = open("data_15_03.txt", mode="w")
# キーボードから文字列「end」が入力されるまで繰り返す
# while ___ウ___:
while True:
    str_data = input('入力：')
    # end が入力されたら無限ループより抜ける
    # if ___エ___:
    if str_data == "end":
        break
    # write_file.___オ___(str_data + '¥n')
    write_file.write(str_data + '\n')
# write_file.___カ___
write_file.close()
print('書き込み終了')
