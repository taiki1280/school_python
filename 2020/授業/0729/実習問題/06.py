# abcパッケージのインポート
from abc import ABCMeta
from abc import abstractmethod


# 計算抽象クラス（Calcクラス）の定義
class Calc(metaclass=ABCMeta):
    # コンストラクタ定義
    """
    _number1: int（計算されれる数値）アクセス属性：protected
    _number2: int（計算されれる数値）アクセス属性：protected
    """
    def __init__(self, _number1: int, _number2: int):
        self._number1 = _number1
        self._number2 = _number2

    # 計算抽象メソッド（calcメソッド）定義
    """
    メソッドシグニチャ
        メソッド名：calc
        引数：なし
        処理：算術計算して値を返す
        戻り値：数値
    """

    @abstractmethod
    def calc(self) -> int:
        pass

    # 計算過程結果を表示するメソッド（do_calcメソッド)の定義
    """
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理：算術計算の過程と結果を表示する
        戻り値：なし
    """

    def do_calc(self) -> None:
        pass


# たし算クラス（Addクラス）の定義
class Add(Calc):
    # Calcクラスを継承
    # コンストラクタ定義
    """
    _number1: int（計算されれる数値）アクセス属性：protected
    _number2: int（計算されれる数値）アクセス属性：protected
    """
    def __init__(self, _number1: int, _number2: int):
        super().__init__(_number1, _number2)

    # たし算メソッド（calcメソッド）のオーバーライド
    """
    メソッドシグニチャ
        メソッド名：calc
        引数：なし
        処理：たし算して結果を返す
        戻り値：たし算の結果（型 int）
    """

    def calc(self) -> int:
        return self._number1 + self._number2

    # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
    """
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理；たし算の過程と結果を表示する
        戻り値：なし
    """

    def do_calc(self) -> int:
        print(f'{self._number1} + {self._number2}', end=" = ")


# ひき算クラス（Subクラス）の定義
# Calcクラスを継承
class Sub(Calc):
    # コンストラクタ定義
    """
    _number1: int（計算されれる数値）アクセス属性：protected
    _number2: int（計算されれる数値）アクセス属性：protected
    """
    def __init__(self, _number1: int, _number2: int):
        super().__init__(_number1, _number2)

    # ひき算メソッド（calcメソッド）のオーバーライド
    """
    メソッドシグニチャ
        メソッド名：calc
        引数：なし
        処理：ひき算して結果を返す
        戻り値：ひき算の結果（型 int）
    """

    def calc(self) -> int:
        return self._number1 - self._number2

    # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
    """
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理；ひき算の過程と結果を表示する
        戻り値：なし
    """

    def do_calc(self) -> int:
        print(f'{self._number1} - {self._number2}', end=" = ")


# かけ算クラス（Mulクラス）の定義
# Calcクラスを継承
class Mul(Calc):
    # コンストラクタ定義
    """
    _number1: int（計算されれる数値）アクセス属性：protected
    _number2: int（計算されれる数値）アクセス属性：protected
    """
    def __init__(self, _number1: int, _number2: int):
        super().__init__(_number1, _number2)

    # かけ算メソッド（calcメソッド）のオーバーライド
    """
    メソッドシグニチャ
        メソッド名：calc
        引数：なし
        処理：かけ算して結果を返す
        戻り値：かけ算の結果（型 int）
    """

    def calc(self) -> int:
        return self._number1 * self._number2

    # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
    """
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理；かけ算の過程と結果を表示する
        戻り値：なし
    """

    def do_calc(self) -> int:
        print(f'{self._number1} - {self._number2}', end=" = ")


# わり算クラス（Divクラス）の定義
# Calcクラスを継承
class Div(Calc):
    # コンストラクタ定義
    """
    _number1: int（計算されれる数値）アクセス属性：protected
    _number2: int（計算されれる数値）アクセス属性：protected
    """
    def __init__(self, _number1: int, _number2: int):
        super().__init__(_number1, _number2)

    # わり算メソッド（calcメソッド）のオーバーライド
    """
    メソッドシグニチャ
        メソッド名：calc
        引数：なし
        処理：わり算して結果を返す
        戻り値：わり算の結果（型 float）
    """

    def calc(self) -> float:
        return self._number1 / self._number2

    # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
    """
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理；わり算の過程と結果を表示する
        戻り値：なし
    """

    def do_calc(self) -> int:
        print(f'{self._number1} / {self._number2}', end=" = ")


# 剰余算クラス（Modクラス）の定義
# Calcクラスを継承
class Mod(Calc):
    # コンストラクタ定義
    """
    _number1: int（計算されれる数値）アクセス属性：protected
    _number2: int（計算されれる数値）アクセス属性：protected
    """
    def __init__(self, _number1: int, _number2: int):
        super().__init__(_number1, _number2)

    # 剰余算メソッド（calcメソッド）のオーバーライド
    """
    メソッドシグニチャ
        メソッド名：calc
        引数：なし
        処理：剰余算して結果を返す
        戻り値：剰余算の結果（型 int）
    """

    def calc(self) -> int:
        return self._number1 % self._number2

    # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
    """
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理；剰余算の過程と結果を表示する
        戻り値：なし
    """

    def do_calc(self) -> int:
        print(f'{self._number1} % {self._number2}', end=" = ")


# Addクラスからインスタンスを生成し、変数 add に代入
# number1 = 100, number2 = 33
add = Add(100, 33)

# Subクラスからインスタンスを生成し、変数 sub に代入
# number1 = 100, number2 = 33
sub = Sub(100, 33)

# Mulクラスからインスタンスを生成し、変数 mul に代入
# number1 = 100, number2 = 33
mul = Mul(100, 33)

# Divクラスからインスタンスを生成し、変数 div に代入
# number1 = 100, number2 = 33
div = Div(100, 33)

# Modクラスからインスタンスを生成し、変数 mod に代入
# number1 = 100, number2 = 33
mod = Mod(100, 33)

add.do_calc()
print(add.calc())

# ひき算の過程と結果を表示
sub.do_calc()
print(sub.calc())

# かけ算の過程と結果を表示
mul.do_calc()
print(mul.calc())

# わり算の過程と結果を表示
div.do_calc()
print(div.calc())

# 剰余算の過程と結果を表示
mod.do_calc()
print(mod.calc())