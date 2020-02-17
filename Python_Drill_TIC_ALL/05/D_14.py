# 成績管理
# 成績を入力する関数を定義


def input_score():
    # 名前として end が入力されるまで繰り返す
    # 個人成績辞書を初期化
    personal_grade = {}
    # while ___ア___:
    while True:
        # 名前を入力
        name = input('名前：')
        # 名前として end が入力されたか否かを判断
        # if ___イ___:
        if name == "end":
            # 無限ループを抜ける
            break
        # 国語の得点を入力
        kokugo = int(input('国語の得点：'))
        # 算数の得点を入力
        sansu = int(input('算数の得点：'))
        # 理科の得点を入力
        rika = int(input('理科の得点：'))
        # ３科目の得点をタプルとして保存
        # score = ___ウ___
        score = (kokugo, sansu, rika)
        # 個人成績を辞書に追加
        # ___エ___
        personal_grade[name] = score
    # 個人成績辞書を返す
    # ___オ___
    return personal_grade
    # 個人成績を表示する関数を定義


def disp_score(score):
    # 辞書の要素数分繰り返す
    # for ___カ___:
    for name in score:
        # 表示用テンプレートを生成
        tpl = '名前 = {}：国語の得点 = {}：算数の得点 = {}：理科の得点 = {}'.format(
            name, score[name][0], score[name][1], score[name][2])
        # .format(name, ___キ___, ___ク___, ___ケ___)
        # 表示
        print(tpl)


# 個人成績の初期化
pesonal_info = {}
# 個人成績を入力
# personal_info = ___コ___
personal_info = input_score()
# 入力した成績を表示
# ___サ___
disp_score(personal_info)
