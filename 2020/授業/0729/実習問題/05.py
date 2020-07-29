# たし算クラス（Addクラス）の定義
class Add():
    # たし算メソッド（addメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：add
        引数：number1: int, number2: int（たし算される数値）
        処理：引数をたし算し結果を返す
        戻り値：たし算の結果（型 int）
    '''
    def add(self, number1: int, number2: int) -> int:
        return number1 + number2

    # たし算の結果を表示するメソッド（disp_addメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：disp_add
        引数：number1: int, number2: int（たし算される数値）
        処理：たし算の過程とたし算の結果を表示する
        戻り値：なし
    '''

    def disp_add(self, number1: int, number2: int) -> None:
        print(f"{number1} + {number2}", end=' = ')


# ひき算クラス（Subクラス）の定義
class Sub():
    # ひき算メソッド（subメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：sub
        引数：number1: int, number2: int（ひき算される数値）
        処理：引数をひき算し結果を返す
        戻り値：ひき算の結果（型 int）
    '''
    def sub(self, number1: int, number2: int) -> int:
        return number1 - number2

    # ひき算の結果を表示するメソッド（disp_subメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：disp_sub
        引数：number1: int, number2: int（ひき算される数値）
        処理：ひき算の過程とひき算の結果を表示する
        戻り値：なし
    '''

    def disp_sub(self, number1: int, number2: int) -> None:
        print(f"{number1} - {number2}", end=' = ')


# かけ算クラス（Mulクラス）の定義
class Mul:
    # かけ算メソッド（mulメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：mul
        引数：number1: int, number2: int（かけ算される数値）
        処理：引数をかけ算し結果を返す
        戻り値：かけ算の結果（型 int）
    '''
    def mul(self, number1: int, number2: int) -> int:
        return number1 * number2

    # かけ算の結果を表示するメソッド（disp_mulメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：disp_mul
        引数：number1: int, number2: int（かけ算される数値）
        処理：かけ算の過程とかけ算の結果を表示する
        戻り値：なし
    '''

    def disp_mul(self, number1: int, number2: int) -> None:
        print(f"{number1} * {number2}", end=' = ')


# わり算クラス（Divクラス）の定義
class Div:
    # わり算メソッド（divメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：div
        引数：number1: int, number2: int（わり算される数値）
        処理：引数をわり算し結果を返す
        戻り値：わり算の結果（型 int）
    '''
    def div(self, number1: int, number2: int) -> int:
        return number1 / number2

    # わり算の結果を表示するメソッド（disp_divメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：disp_div
        引数：number1: int, number2: int（わり算される数値）
        処理：わり算の過程とわり算の結果を表示する
        戻り値：なし
    '''

    def disp_div(self, number1: int, number2: int) -> None:
        print(f"{number1} / {number2}", end=' = ')


# 剰余算クラス（Modクラス）の定義
class Mod:
    # 剰余算メソッド（modメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：mod
        引数：number1: int, number2: int（剰余算される数値）
        処理：引数を剰余算し結果を返す
        戻り値：剰余算の結果（型 int）
    '''
    def mod(self, number1: int, number2: int) -> int:
        return number1 % number2

    # 剰余算の結果を表示するメソッド（disp_modメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：disp_mod
        引数：number1: int, number2: int（剰余算される数値）
        処理：剰余算の過程と剰余算の結果を表示する
        戻り値：なし
    '''

    def disp_mod(self, number1: int, number2: int) -> None:
        print(f"{number1} % {number2}", end=' = ')


# 計算クラス（Calcクラス）の定義
# Add, Sub, Mul, Div, Mod各クラスを継承（多重継承）
class Calc(Add, Sub, Mul, Div, Mod):
    # コンストラクタ定義
    '''
    number1: int（計算される数値）
    number2: int（計算される数値）
    '''
    def __init__(self, number1: int, number2: int):
        self.number1 = number1
        self.number2 = number2

    # メソッド定義
    # 各種算術演算子結果を表示するメソッド（do_calcメソッド）の定義
    '''
    メソッドシグニチャ
        メソッド名：do_calc
        引数：なし
        処理：二つの数値を算術演算し、過程と結果を表示する。
        戻り値：なし
    '''

    def do_calc(self):
        self.disp_add(self.number1, self.number2)
        print(self.add(self.number1, self.number2))
        self.disp_sub(self.number1, self.number2)
        print(self.sub(self.number1, self.number2))
        self.disp_mul(self.number1, self.number2)
        print(self.mul(self.number1, self.number2))
        self.disp_div(self.number1, self.number2)
        print(self.div(self.number1, self.number2))
        self.disp_mod(self.number1, self.number2)
        print(self.mod(self.number1, self.number2))


Calc(100, 33).do_calc()
