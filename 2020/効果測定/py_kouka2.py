#もとになるCarクラス
class Car:
    """コンストラクタ"""

    # def __init__(_____(1)_____)->None:
    def __init__(self) -> None:
        self.car_type = "一般車"

    """紹介メソッド"""

    # def introduce(_____(2)_____)->None:
    def introduce(self) -> None:
        print("この車は{}です。".format(self.car_type))


#Carクラスを継承したトラッククラス
# class Truck(_____(3)_____):
class Truck(Car):
    """コンストラクタ"""

    # def __init__(_____(4)_____):
    def __init__(self):
        #親クラスのコンストラクタを呼び出す
        # _____(5)_____
        super().__init__()
        #変数car_typeを書き換える
        self.car_type = "トラック"
        #新たな変数chara(特徴)を追加
        self.chara = "物を大量に運ぶことができる"

    #紹介メソッドのオーバーライド
    # _____(6)_____:
    def introduce(self):
        #親クラスの紹介メソッドの呼び出し
        # _____(7)_____
        super().introduce()
        #特徴の説明文を追加する
        print("この車の特徴は「{}」です。".format(self.chara))


#Carクラスを継承したスポーツカークラス
# class Sportscar(_____(8)_____):
class Sportscar(Car):
    """コンストラクタ"""

    # def __init__(_____(9)_____):
    def __init__(self):
        #親クラスのコンストラクタを呼び出す
        # _____(10)_____
        super().__init__()
        #変数car_typeを書き換える
        self.car_type = "スポーツカー"
        #新たな変数chara(特徴)を追加
        self.chara = "速く走ることができる"

    #紹介メソッドのオーバーライド
    # _____(11)_____:
    def introduce(self):
        #親クラスの紹介メソッドの呼び出し
        # _____(12)_____
        super().introduce()
        #特徴の説明文を追加する
        print("この車の特徴は「{}」です。".format(self.chara))


#トラックとスポーツカーの紹介をする
#トラッククラスのインスタンス化
# truck = _____(13)_____
truck = Truck()
#スポーツカークラスのインスタンス化
# sportscar = _____(14)_____
sportscar = Sportscar()

#それぞれの紹介メソッドを呼び出す
# _____(15)_____
truck.introduce()
# _____(16)_____
sportscar.introduce()
