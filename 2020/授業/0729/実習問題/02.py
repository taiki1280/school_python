# 四角形クラス（Quadrangle）の定義
class Quadrangle:
    # コンストラクタ定義
    '''
    name: str（図形名）アクセス属性：private
    width: float（底辺）アクセス属性：private
    height: float（高さ）アクセス属性：private
    '''
    def __init__(self, name: str, width: float, height: float):
        self.__name = name
        self.__width = width
        self.__height = height

    # ゲッター定義
    # nameゲッター
    @property
    def name(self):
        return self.__name

    # widthゲッター
    @property
    def width(self):
        return self.__width

    # heightゲッター
    @property
    def height(self):
        return self.__height

    ## セッター定義
    # nameセッター
    @name.setter
    def name(self, name: str) -> None:
        self.__name = name

    # widthセッター
    @width.setter
    def width(self, width: float) -> None:
        self.__width = width

    # heightセッター
    @height.setter
    def height(self, height: float) -> None:
        self.__height = height

    ## メソッド定義
    # 面積をもとめるて返す：areaメソッドの定義
    '''
        メソッドシグニチャ
            メソッド名：area
            引数：なし
            処理：面積をもとめて返す
            戻り値：面積（型 float）
    '''

    def area(self) -> float:
        return self.__width * self.__height


obj = Quadrangle("長方形", 12.3, 34.5)
print(f"幅 = {obj.width} 高さ = {obj.height} {obj.name}の面積 = {obj.area()}")
print(f"図形名を{obj.name}から「正方形」に修正")
obj.name = "正方形"
print(f"図形名を{obj.width}から「23.4」に修正")
obj.width = 23.4
print(f"図形名を{obj.height}から「23.4」に修正")
obj.height = 23.4
print(f"幅 = {obj.width} 高さ = {obj.height} {obj.name}の面積 = {obj.area()}")
