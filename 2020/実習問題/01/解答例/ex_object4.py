# 武将クラス（Commanderクラス）の定義
class Commander:
  # クラス変数 __counter を 0 に初期化
  # 何番までの識別番号与えたかを保存するクラス変数の定義
  __counter = 0

  # コンストラクタ定義
  '''
  __name: str（武将の名前）アクセス属性：private
  __id: int（識別番号）アクセス属性：private
    クラス変数はインスタンスが生成されるたびに１インクリメントする
    __idには、クラス変数 __counter を代入する
  '''
  def __init__(self, name: str) -> None:
    self.__name = name
    Commander.__counter += 1
    self.__id = Commander.__counter

  # ゲッター定義
  # nameゲッター定義
  @property
  def name(self) -> str:
    return self.__name

  # idゲッター定義
  @property
  def id(self) -> int:
    return self.__id

  # クラスメソッド定義
  # 最後に与えた識別番号を返すメソッド max_id の定義
  '''
  メソッドシグニチャ
    メソッド名：max_id
    引数：なし
    処理：最後に与えた識別番号を返す
    戻り値：識別番号（型 int）
  '''
  @classmethod
  def max_id(cls) -> int:
    return cls.__counter

  # インスタンスメソッド定義
  # 武将名と識別番号を表示する print メソッドの定義
  '''
  メソッドシグニチャ
    メソッド名：print
    引数：なし
    処理：武将名と識別番号を表示する
    戻り値：なし
  '''
  def print(self) -> None:
    print('{}：{}番'.format(self.__name, self.__id))

# Commanderクラスからインスタンスを生成し変数 com1 に代入
# 武将名：織田信長
com1 = Commander('織田信長')

# Commanderクラスからインスタンスを生成し変数 com2 に代入
# 武将名：武田信玄
com2 = Commander('武田信玄')

# Commanderクラスからインスタンスを生成し変数 com3 に代入
# 武将名：上杉謙信
com3 = Commander('上杉謙信')

# Commanderクラスからインスタンスを生成し変数 com4 に代入
# 武将名：徳川家康
com4 = Commander('徳川家康')

# 各インスタンスの武将名と識別番号を表示
com1.print()
com2.print()
com3.print()
com4.print()

# 最大の識別番号を表示
print('最大の識別番号 = {}'.format(Commander.max_id()))