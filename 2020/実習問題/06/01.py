# MyNumberクラスの定義
class MyNumber:
    # フィールド
    '''
    name: float（アクセス属性 protected）
    '''

    # コンストラクタ定義
    def __init__(self, name: float) -> None:
        self._name = name

    # 足し算メソッド定義（メソッドチェイン可能）
    '''
    メソッドシグニチャ
        メソッド名：add
        引数：operand: int（足し算する数値）
        処理：足し算をし、計算過程を表示する
        戻り値：self
    '''

    def add(self, operand: int):
        print(f'{self._name} + {operand} = {self._name + operand}')
        self._name += operand
        return self

    # ひき算メソッド定義（メソッドチェイン可能）
    '''
    メソッドシグニチャ
        メソッド名：sub
        引数：operand: int（ひき算する数値）
        処理：ひき算をし、計算過程を表示する
        戻り値：self
    '''

    def sub(self, operand: int):
        print(f'{self._name} - {operand} = {self._name - operand}')
        self._name -= operand
        return self

    # かけ算メソッド定義（メソッドチェイン可能）
    '''
    メソッドシグニチャ
        メソッド名：mul
        引数：operand: int（かけ算する数値）
        処理：かけ算をし、計算過程を表示する
        戻り値：self
    '''

    def mul(self, operand: int):
        print(f'{self._name} * {operand} = {self._name * operand}')
        self._name *= operand
        return self

    # わり算メソッド定義（メソッドチェイン可能）
    '''
    メソッドシグニチャ
        メソッド名：div
        引数：operand: int（わり算する数値）
        処理：わり算をし、計算過程を表示する
        戻り値：self
    '''

    def div(self, operand: int):
        print(f'{self._name} / {operand} = {self._name / operand}')
        self._name /= operand
        return self


# メソッドチェインを使用して四則演算する
# インスタンス生成
my_number = MyNumber(100)

# １００を足す⇒５０をひく⇒２０をかける⇒１５でわる⇒５５をたす⇒３０をひく⇒７０をひく⇒１３でわる
my_number.add(100).sub(50).mul(20).div(15).add(55).sub(30).sub(70).div(13)