# 四角形クラス（Quadrangle）の定義
class Quadrangle:
  # コンストラクタ定義
  '''
  name: str（図形名）アクセス属性：private
  width: float（底辺）アクセス属性：private
  height: float（高さ）アクセス属性：private
  '''
  def __init__(self, name: str, width: float, height: float) -> None:
    self.__name = name
    self.__width = width
    self.__height = height

  # ゲッター定義
  # nameゲッター
  @property
  def name(self) -> str:
    return self.__name

  # widthゲッター
  @property
  def width(self) -> float:
    return self.__width

  # heightゲッター
  @property
  def height(self) -> float:
    return self.__height

  ## セッター定義
  # nameセッター
  @name.setter
  def name(self, name: str) -> None:
    self.__name = name

  # widthセッター
  @width.setter
  def width(self, width: float) -> None:
    self.__width = width if width > 0 else 0

  # heightセッター
  @height.setter
  def height(self, height: float) -> None:
    self.__height = height if height > 0 else 0

  ## メソッド定義
  # 面積をもとめて返す：areaメソッドの定義
  '''
  メソッドシグニチャ
    メソッド名：area
    引数：なし
    処理：面積をもとめて返す
    戻り値：面積（型 float）
  '''
  def area(self) -> float:
    return self.__height * self.__width


# Quadrangleクラスを使用したプログラム
# Quadrangleクラスのインスタンスを生成し、変数quadに代入
# name = 長方形、width = 12.3、height = 34.5
quad = Quadrangle('長方形', 12.3, 34.5)
# 面積をもとめて表示する
print('幅 = {}、高さ = {}の{}の面積= {}'
  .format(quad.width, quad.height, quad.name, quad.area()))

# 図形の設定を変更
# name ⇒ '正方形'
quad.name = '正方形'
# width ⇒ 23.4
quad.width = 23.4
# heith ⇒ 23.4
quad.height = 23.4
# 面積をもとめて表示する
print()
print('図形の設定を変更します。')
print('幅 = {}、高さ = {}の{}の面積= {}'
  .format(quad.width, quad.height, quad.name, quad.area()))