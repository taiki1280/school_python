# CarToyクラス定義
class CarToy:
    # コンストラクタ定義
    def __init__(self, code: str, price: int):
        self._code = code
        self._price = price

    # ゲッター定義
    # codeゲッター
    @property
    def code(self):
        return self._code

    # priceゲッター
    @property
    def price(self):
        return self._price

    # セッター定義
    # codeセッター
    @code.setter
    def code(self, code: str):
        self._code = code

    # priceセッター
    @price.setter
    def price(self, price: int):
        self._price = price

    # 走るメソッド（goメソッド）定義
    def go(self):
        print("くるまを走らせます。")
        print("ブロロロロー！！")

    # ライトをつけるメソッド（lightメソッド）定義
    def light(self):
        pass


class PatrolCarToy(CarToy):
    # コンストラクタ定義
    def __init__(self, code: str, price: int):
        super().__init__(code, price)

    # 走るメソッド（goメソッド）定義（オーバーライド）
    def go(self):
        super().go()
        print("パトカーを走らせます。")
        print("ウーウーウー！！ブロロー！！")

    # サイレンを鳴らすメソッド（sirenメソッド）定義
    def siren(self):
        print("パトカーのサイレンを鳴らします。")
        print("ウーウーウー！！")


class TrainToy():
    # コンストラクタ定義
    def __init__(self, _code: str, _price: int):
        self._code = _code
        self._price = _price

    # ゲッター定義
    # codeゲッター
    @property
    def code(self):
        return self._code

    # priceゲッター
    @property
    def price(self):
        return self._price

    # セッター定義
    # codeセッター
    @code.setter
    def code(self, code: str):
        self._code = code

    # priceセッター
    @price.setter
    def price(self, price: int):
        self._price = price

    # 走るメソッド（goメソッド）定義
    def go(self):
        print("電車を走らせます。")
        print("ガタンゴトン！ガタンゴトン！！")

    # 警笛を鳴らすメソッド（hornメソッド）定義
    def horn(self):
        print("電車の警笛を鳴らします。")
        print("プォー！！プォー！！")


class ShopKeeper():
    # コンストラクタ定義
    def __init__(self, name: str):
        self.name = name

    # 価格チェックメソッド（checkメソッド）定義
    def check(self, car: CarToy, pcar: PatrolCarToy, train: TrainToy) -> None:
        print(f"私が店長の {self.name} です。価格のチェックをします。")
        print(f"商品コード：{car.code} の価格は {car.price} 円です。")
        print(f"商品コード：{pcar.code} の価格は {pcar.price} 円です。")
        print(f"商品コード：{train.code} の価格は {train.price} 円です。")

    # おもちゃのデモメソッド（doDemoメソッド）定義
    def doDemo(self, car: CarToy, pcar: PatrolCarToy, train: TrainToy) -> None:
        print(f"私が店長の {self.name} です。おもちゃのデモをします。")
        pcar.go()
        pcar.siren()
        train.go()
        train.horn()


keeper = ShopKeeper('鈴木一朗')
car = CarToy('CARTOY0001', 1800)
pcar = PatrolCarToy('PATROLTOY0001', 3500)
train = TrainToy('TRAINTOY0001', 4800)
keeper.check(car, pcar, train)
keeper.doDemo(car, pcar, train)