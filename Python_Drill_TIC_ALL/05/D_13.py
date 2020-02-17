

# バリューの合計を求める関数
# 県の人口の合計を求める関数の定義
def prefecture_total(prefecture):
    # 辞書の要素数分繰り返す
    # 合計を初期化
    total = 0
    # for ___ア___:
    for value in prefecture:
        # 人口を合計する
        # ___イ___
        total += prefecture[value]

    # ___ウ___
    return total


# 県名と人口を表示する関数
def disp_prefecture(prefecture):
    # 辞書の要素数分繰り返す
    # for ___エ___:
    for name in prefecture:
        # 表示用テンプレートの作成
        # tpl = '{} の人口は、{} 人'.format(name, ___オ___)
        tpl = '{} の人口は、{} 人'.format(name, prefecture[name])
        # 県名と人口を表示
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
# 県名と人口を表示
# ___カ___
disp_prefecture(tohoku)
# 東北の人口の合計を求める
# total_population = ___キ___
total_population = prefecture_total(tohoku)
# 表示用テンプレートの作成
# tpl = '東北６県の人口の合計は、{} 人です。'.___ク___
tpl = '東北６県の人口の合計は、{} 人です。'.format(total_population)
# 人口の合計を表示
print(tpl)
