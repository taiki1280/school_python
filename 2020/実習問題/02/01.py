# abcパッケージのインポート
from abc import ABCMeta
from abc import abstractmethod


# 物体の表面積と体積を計算する抽象クラス（Dimensionクラス）の定義
class Dimension(metaclass=ABCMeta):
    # コンストラクタ定義
    """
    _side: float（物体の辺の長さ）アクセス属性：protected
    """
    def __init__(self, side: float):
        self._side = side

    # ゲッター定義
    # sideゲッター
    @property
    def side(self):
        return self._side

    # 表面積を計算する抽象メソッドの定義
    """
    メソッドシグニチャ
        メソッド名：area
        引数：なし
        処理：物体の表面積を計算して返す
        戻り値：物体の表面積（型 float）
    """

    @abstractmethod
    def area(self) -> float:
        pass

    # 体積を計算する抽象メソッドの定義
    """
    メソッドシグニチャ
        メソッド名：volume
        引数：なし
        処理：物体の体積を計算して返す
        戻り値：物体の体積（型 float）
    """

    @abstractmethod
    def volume(self) -> float:
        pass


# 球体の表面積と体積を計算するクラス（Sphereクラス）の定義
# 抽象クラス Dimension を継承
class Sphere(Dimension):
    # コンストラクタ定義
    """
    _side: float（球体の半径）アクセス属性：protected
    """
    def __init__(self, side: float):
        super().__init__(side)

    # 球体の表面積を計算するメソッド area の実装
    # 球体の表面積 = 4.0 * 3.14 * 半径の２乗
    def area(self):
        return 4 * 3.14 * self.side**2

    # 球体の体積を計算するメソッドの定義
    # 球体の体積 = 4.0 * 3.14 * 半径の３乗 / 3.0
    def volume(self):
        return 4 * 3.14 * self.side**3 / 3


# 立方体の表面積と体積を計算するクラス（Cubeクラス）の定義
# 抽象クラス Dimension を継承
class Cube(Dimension):
    # コンストラクタ定義
    """
    _side: float（立方体の辺）アクセス属性：protected
    """
    def __init__(self, side: float):
        super().__init__(side)

    # 立方体の表面積を計算するメソッド area の実装
    # 立方体の表面積 = 6.0 * １辺の２乗
    def area(self):
        return 6 * self.side**2

    # 立方体の体積を計算するメソッドの定義
    # 立方体の体積 = １辺の３乗
    def volume(self):
        return self.side**3


radius = 10
sphere = Sphere(radius)
print(f"半径{radius}の球体の表面積 : {sphere.area()} 体積{sphere.volume()}")

length = 10
cube = Cube(length)
print(f"１辺{length}の立方体の表面積 : {cube.area()} 体積{cube.volume()}")
