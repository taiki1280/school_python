# abcパッケージのインポート
from abc import ABCMeta
from abc import abstractmethod

# 計算抽象クラス（Calcクラス）の定義
class Calc(metaclass = ABCMeta):
  # コンストラクタ定義
  '''
  _number1: int（計算されれる数値）アクセス属性：protected
  _number2: int（計算されれる数値）アクセス属性：protected
  '''
  def __init__(self, number1: int, number2: int) -> None:
    self._number1 = number1
    self._number2 = number2

  # 計算抽象メソッド（calcメソッド）定義
  '''
  メソッドシグニチャ
    メソッド名：calc
    引数：なし
    処理：算術計算して値を返す
    戻り値：数値
  '''
  @abstractmethod
  def calc(self) -> 'Number':
    pass

  # 計算過程結果を表示するメソッド（do_calcメソッド)の定義
  '''
  メソッドシグニチャ
    メソッド名：do_calc
    引数：なし
    処理：算術計算の過程と結果を表示する
    戻り値：なし
  '''
  def do_calc(self) -> None:
    print(self.calc())


# たし算クラス（Addクラス）の定義
# Calcクラスを継承
class Add(Calc):
  # コンストラクタ定義
  '''
  _number1: int（計算されれる数値）アクセス属性：protected
  _number2: int（計算されれる数値）アクセス属性：protected
  '''
  def __init__(self, number1: int, number2: int) -> None:
    super().__init__(number1, number2)

  # たし算メソッド（calcメソッド）のオーバーライド
  '''
  メソッドシグニチャ
    メソッド名：calc
    引数：なし
    処理：たし算して結果を返す
    戻り値：たし算の結果（型 int）
  '''
  def calc(self) -> int:
    return self._number1 + self._number2

  # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
  '''
  メソッドシグニチャ
    メソッド名：do_calc
    引数：なし
    処理；たし算の過程と結果を表示する
    戻り値：なし
  '''
  def do_calc(self) -> None:
    print('たし算：{} + {} = {}'
      .format(self._number1, self._number2, self.calc()))


# ひき算クラス（Subクラス）の定義
# Calcクラスを継承
class Sub(Calc):
  # コンストラクタ定義
  '''
  _number1: int（計算されれる数値）アクセス属性：protected
  _number2: int（計算されれる数値）アクセス属性：protected
  '''
  def __init__(self, number1: int, number2: int) -> None:
    super().__init__(number1, number2)

  # たし算メソッド（calcメソッド）のオーバーライド
  '''
  メソッドシグニチャ
    メソッド名：calc
    引数：なし
    処理：ひき算して結果を返す
    戻り値：ひき算の結果（型 int）
  '''
  def calc(self) -> int:
    return self._number1 - self._number2

  # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
  '''
  メソッドシグニチャ
    メソッド名：do_calc
    引数：なし
    処理；ひき算の過程と結果を表示する
    戻り値：なし
  '''
  def do_calc(self) -> None:
    print('ひき算：{} - {} = {}'
      .format(self._number1, self._number2, self.calc()))


# かけ算クラス（Mulクラス）の定義
# Calcクラスを継承
class Mul(Calc):
  # コンストラクタ定義
  '''
  _number1: int（計算されれる数値）アクセス属性：protected
  _number2: int（計算されれる数値）アクセス属性：protected
  '''
  def __init__(self, number1: int, number2: int) -> None:
    super().__init__(number1, number2)

  # たし算メソッド（calcメソッド）のオーバーライド
  '''
  メソッドシグニチャ
    メソッド名：calc
    引数：なし
    処理：かけ算して結果を返す
    戻り値：かけ算の結果（型 int）
  '''
  def calc(self) -> int:
    return self._number1 * self._number2

  # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
  '''
  メソッドシグニチャ
    メソッド名：do_calc
    引数：なし
    処理；かけ算の過程と結果を表示する
    戻り値：なし
  '''
  def do_calc(self) -> None:
    print('かけ算：{} * {} = {}'
      .format(self._number1, self._number2, self.calc()))


# わり算クラス（Divクラス）の定義
# Calcクラスを継承
class Div(Calc):
  # コンストラクタ定義
  '''
  _number1: int（計算されれる数値）アクセス属性：protected
  _number2: int（計算されれる数値）アクセス属性：protected
  '''
  def __init__(self, number1: int, number2: int) -> None:
    super().__init__(number1, number2)

  # わり算メソッド（calcメソッド）のオーバーライド
  '''
  メソッドシグニチャ
    メソッド名：calc
    引数：なし
    処理：わり算して結果を返す
    戻り値：わり算の結果（型 int）
  '''
  def calc(self) -> float:
    return float(self._number1) / float(self._number2)

  # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
  '''
  メソッドシグニチャ
    メソッド名：do_calc
    引数：なし
    処理；わり算の過程と結果を表示する
    戻り値：なし
  '''
  def do_calc(self) -> None:
    print('わり算：{} / {} = {}'
      .format(self._number1, self._number2, self.calc()))


# 剰余算クラス（Modクラス）の定義
# Calcクラスを継承
class Mod(Calc):
  # コンストラクタ定義
  '''
  _number1: int（計算されれる数値）アクセス属性：protected
  _number2: int（計算されれる数値）アクセス属性：protected
  '''
  def __init__(self, number1: int, number2: int) -> None:
    super().__init__(number1, number2)

  # 剰余算メソッド（calcメソッド）のオーバーライド
  '''
  メソッドシグニチャ
    メソッド名：calc
    引数：なし
    処理：剰余算して結果を返す
    戻り値：剰余算の結果（型 int）
  '''
  def calc(self) -> int:
    return self._number1 % self._number2

  # 計算過程と結果を表示するメソッド（do_calc）メソッドのオーバライド
  '''
  メソッドシグニチャ
    メソッド名：do_calc
    引数：なし
    処理；剰余算の過程と結果を表示する
    戻り値：なし
  '''
  def do_calc(self) -> None:
    print('剰余算：{} % {} = {}'
      .format(self._number1, self._number2, self.calc()))


# 算術演算のプログラム

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

# たし算の過程と結果を表示
add.do_calc()
# ひき算の過程と結果を表示
sub.do_calc()
# かけ算の過程と結果を表示
mul.do_calc()
# わり算の過程と結果を表示
div.do_calc()
# 剰余算の過程と結果を表示
mod.do_calc()