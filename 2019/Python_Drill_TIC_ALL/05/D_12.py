# 辞書のキーとバリューを表示する関数
# disp_dict(dict) の定義


def disp_dict(dict):
    # 辞書の要素数分繰り返す
    # for ___ア___:
    for key in dict:
        # 表示用テンプレートの作成
        # tpl = 'key[{}]：value[{}]'.format(key, ___イ___)
        tpl = 'key[{}]：value[{}]'.format(key, dict[key])
        # 辞書のキーとバリューを表示
        print(tpl)


# 辞書の初期化
tohoku = {
    '青森県': 1249000,
    '秋田県': 969500,
    '岩手県': 1229000,
    '山形県': 1080000,
    '宮城県': 2306000,
    '福島県': 1848000
}
# 辞書のキーとバリューを表示
# ___ウ__
disp_dict(tohoku)
