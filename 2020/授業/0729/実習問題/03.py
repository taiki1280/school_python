# 図形（Figure）クラスの定義
class Figure:
    '''
    コンストラクタ定義
    name: str（図形名）アクセス属性：protected
    sides: []（辺の長さ）アクセス属性：protected
    '''
    def __init__(self, name: str, sides: []):
        self.__name = name
        self.__sides = sides

    # ゲッター定義
    # nameゲッター
    @property
    def name(self):
        return self.__name

    # sidesゲッター
    @property
    def sides(self):
        return self.__sides

    # セッター定義
    # nameセッター
    @name.setter
    def name(self, name: str) -> None:
        self.__name = name

    # sidesセッター
    @sides.setter
    def sides(self, sides: []) -> None:
        self.__sides = sides

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
        pass


# ３角形（Triangle）クラスの定義
# Figureクラスを継承
class Triangle(Figure):
    # コンストラクタ定義
    def __init__(self, name: str, sides: []):
        super().__init__(name, sides)

    # メソッド定義
    # 面積をもとめて返す：areaメソッドの定義
    def area(self) -> float:
        return self.sides[0] * self.sides[1] / 2


# ４角形（Square）クラスの定義
# Figureクラスを継承
class Square(Figure):
    # コンストラクタ定義
    def __init__(self, name: str, sides: []):
        super().__init__(name, sides)

    # メソッド定義
    # 面積をもとめて返す：areaメソッドの定義
    def area(self) -> float:
        return self.sides[0] * self.sides[1]


# 円（Circle）クラスの定義
# Figureクラスを継承
class Circle(Figure):
    # コンストラクタ定義
    def __init__(self, name: str, sides: []):
        super().__init__(name, sides)

    # メソッド定義
    # 面積をもとめて返す：areaメソッドの定義
    def area(self) -> float:
        return self.sides[0] * self.sides[0] * 3.14


# 台形（Trapezoid）クラスの定義
# Figureクラスを継承
class Trapezoid(Figure):
    # コンストラクタ定義
    def __init__(self, name: str, sides: []):
        super().__init__(name, sides)

    # メソッド定義
    # 面積をもとめて返す：areaメソッドの定義
    def area(self) -> float:
        return (self.sides[0] + self.sides[1]) * self.sides[2] / 2


# 楕円（Ellips）クラスの定義
# Figureクラスを継承
class Ellips(Figure):
    # コンストラクタ定義
    def __init__(self, name: str, sides: []):
        super().__init__(name, sides)

    # メソッド定義
    # 面積をもとめて返す：areaメソッドの定義
    def area(self) -> float:
        return 3.14 * self.sides[0] * self.sides[1]


tryangle = Triangle(name="三角形", sides=[12.3, 45.6])
print(
    f"底辺 = {tryangle.sides[0]} 高さ = {tryangle.sides[1]} {tryangle.name}の面積 = {tryangle.area()}"
)

rectangle = Square(name="長方形", sides=[13.5, 35.4])
print(
    f"横 = {rectangle.sides[0]} 縦 = {rectangle.sides[1]} {rectangle.name}の面積 = {rectangle.area()}"
)

circle = Circle(name="長方形", sides=[55.6])
print(
    f"横 = {circle.sides[0]} 縦 = {circle.sides[0]} {circle.name}の面積 = {circle.area()}"
)

trapezoid = Trapezoid(name="台形", sides=[23.6, 56.7, 18.5])
print(
    f"横 = {trapezoid.sides[0]} 縦 = {trapezoid.sides[1]} 高さ = {trapezoid.sides[2]} {trapezoid.name}の面積 = {trapezoid.area()}"
)

ellips = Ellips(name="楕円", sides=[45.6, 86.3])
print(
    f"長径 = {ellips.sides[0]} 短径 = {ellips.sides[1]} {ellips.name}の面積 = {ellips.area()}"
)

# データを変更
print('\nデータの変更')
square = Square(name="正方形", sides=[55.6, 55.6])
print(
    f"横 = {square.sides[0]} 縦 = {square.sides[1]} {square.name}の面積 = {square.area()}"
)