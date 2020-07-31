# 図形（Figure）クラスの定義
class Figure:
  '''
  コンストラクタ定義
  name: str（図形名）アクセス属性：protected
  sides: []（辺の長さ）アクセス属性：protected
  '''
  def __init__(self, name: str, sides: []) -> None:
    self._name = name
    self._sides = sides

  # ゲッター定義
  # nameゲッター
  @property
  def name(self) -> str:
    return self._name

  # sidesゲッター
  @property
  def sides(self) -> []:
    return self._sides

  # セッター定義
  # nameセッター
  @name.setter
  def name(self, name: str) -> None:
    self._name = name

  # sidesセッター
  @sides.setter
  def sides(self, sides: []) -> None:
    self._sides = sides

  # メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  '''
  メソッドシグニチャ
    メソッド名：area
    引数：なし
    処理：面積をもとめて返す
    戻り値：面積（型 float）
  '''
  def area(self) -> float:
    return self._sides[0] * self._sides[1]

# ３角形（Triangle）クラスの定義
# Figureクラスを継承
class Triangle(Figure):
  # コンストラクタ定義
  def __init__(self, name: str, sides: []) -> None:
    super().__init__(name, sides)

  # メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  def area(self) -> float:
    return self._sides[0] * self._sides[1] / 2


# ４角形（Square）クラスの定義
# Figureクラスを継承
class Square(Figure):
  # コンストラクタ定義
  def __init__(self, name: str, sides: []) -> None:
    super().__init__(name, sides)

  # メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  def area(self) -> float:
    return self._sides[0] * self._sides[1]

# 円（Circle）クラスの定義
# Figureクラスを継承
class Circle(Figure):
  # コンストラクタ定義
  def __init__(self, name: str, sides: []) -> None:
    super().__init__(name, sides)

  # メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  def area(self) -> float:
    return self._sides[0] ** 2 * 3.14

# 台形（Trapezoid）クラスの定義
# Figureクラスを継承
class Trapezoid(Figure):
  # コンストラクタ定義
  def __init__(self, name: str, sides: []) -> None:
    super().__init__(name, sides)

  # メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  def area(self) -> float:
    return (self._sides[0] + self._sides[1]) * self._sides[2] / 2

# 楕円（Ellips）クラスの定義
# Figureクラスを継承
class Ellips(Figure):
  # コンストラクタ定義
  def __init__(self, name: str, sides: []) -> None:
    super().__init__(name, sides)

  # メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  def area(self) -> float:
    return self._sides[0] * self.sides[1] * 3.14


# 各種クラスを使用したプログラム

# Triangleクラスからインスタンスを生成して変数 triangle に代入
# name = '３角形' sides = [12.3, 45.6]
triangle = Triangle('３角形', [12.3, 45.6])

# Squareクラスからインスタンスを生成して変数 square に代入
# name = '長方形' sides = [13.5, 35.4]
square = Square('長方形', [13.5, 35.4])

# Circleクラスからインスタンスを生成して変数 circle に代入
# name = '円' sides = [55.6]
circle = Circle('円', [55.6])

# Trapezoidクラスからインスタンスを生成して変数 trapezoid に代入
# name = '台形' sides = [23.6, 56.7, 18.5]
trapezoid = Trapezoid('台形', [23.6, 56.7, 18.5])

# Circleクラスからインスタンスを生成して変数 circle に代入
# name = '楕円' sides = [45.6, 86.3]
ellips = Ellips('楕円', [45.6, 86.3])

# ３角形の面積を表示
print('底辺 = {}、高さ = {} の{}の面積 = {}'
    .format(triangle.sides[0], triangle.sides[1], 
        triangle.name, triangle.area()))

# 長方形の面積を表示
print('横 = {}、縦 = {} の{}の面積 = {}'
    .format(square.sides[0], square.sides[1], square.name, square.area()))

# 円の面積を表示
print('半径 = {} の{}の面積 = {}'
    .format(circle.sides[0], circle.name, circle.area()))

# 台形の面積を表示
print('上底 = {}、下底 = {}、高さ = {}の{}の面積 = {}'
    .format(trapezoid.sides[0], trapezoid.sides[1], trapezoid.sides[2],
        trapezoid.name, trapezoid.area()))

# 楕円の面積を表示
print('長径 = {}、短径 = {} の{}の面積 = {}'
    .format(ellips.sides[0], ellips.sides[1], ellips.name, ellips.area()))

# データを変更
print()
print('データの変更')
# squareインスタンスのnameを'正方形'に変更
square.name = '正方形'
# squareインスタンスのsidesを[55.6, 55.6]に変更
square.sides = [55.6, 55.6]
# 正方形の面積を表示
print('１辺 = {} の{}の面積 = {}'
    .format(square.sides[0], square.name, square.area()))