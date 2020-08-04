#クラス　Teammateを定義
class Teammate:
    #ポジション表示用文字列の連想配列(ポジション番号から文字列に変換する用)
    __position_str = {0: "キーパー", 1: "ディフェンス", 2: "ミッドフィールダー", 3: "フォワード"}

    # def _____(1)_____(self,id:int,name:str,position:int) -> None:
    def __init__(self, id: int, name: str, position: int) -> None:
        """コンストラクタ"""
        self.id = id  #背番号
        self.name = name  #氏名
        self.position = position  #ポジション番号

    def print(self) -> None:
        """データ表示"""
        print('背番号：{}、 名前：{}、 ポジション：{}'.format(
            self.id, self.name, self.__position_str[self.position]))


#インスタンスを作成
# kahn = _____(2)_____ (1,"Oliver Rolf Kahn",0)
kahn = Teammate(1, "Oliver Rolf Kahn", 0)
# klose = _____(3)_____ (11,"Miroslav Klose",3)
klose = Teammate(11, "Miroslav Klose", 3)

print("チームメイトを紹介します！")
#メソッドを呼び出し
# _____(4)_____
kahn.print()
# _____(5)_____
klose.print()
