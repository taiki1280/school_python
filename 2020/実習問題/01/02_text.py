# 人間クラス（Person）の定義
class Person:
    # コンストラクタ定義
    '''
    __name: 氏名（型 str スコープ private）
    __age: 年齢（型 int スコープ private）
    __gender: 性別（型 str スコープ private）
    __height: 身長（型 float スコープ private）
    __weight: 体重（型 float スコープ private）
    '''
    def __init__(self, name: str, age: int, gender: str, height: float,
                 weight: float) -> None:
        self.__name = name
        self.__age = age
        self.__gender = gender
        self.__height = height
        self.__weight = weight

    # 各フィールドのゲッター定義
    # nameゲッター
    @property
    def name(self) -> str:
        return self.__name

    # ageゲッター
    @property
    def age(self) -> int:
        return self.__age

    # genderゲッター
    @property
    def gender(self) -> str:
        return self.__gender

    # heightゲッター
    @property
    def height(self) -> float:
        return self.__height

    # weightゲッター
    @property
    def weight(self) -> float:
        return self.__weight

    # 各フィールドのセッター定義
    # nameセッター
    @name.setter
    def name(self, name: str) -> None:
        self.__name = name

    # ageセッター
    # ageに０以下の値が設定された時は０を設定する
    @age.setter
    def age(self, age: int) -> None:
        self.__age = age if age > 0 else 0

    # heightセッター
    # heightに０．０以下の値が設定された時は０．０を設定する
    @height.setter
    def height(self, height: float) -> None:
        self.__height = height if height > 0.0 else 0.0

    # weightセッター
    # weightに０．０以下の値が設定された時は０．０を設定する
    @weight.setter
    def weight(self, weight: float) -> None:
        self.__weight = weight if weight > 0.0 else 0.0

    # 個人情報を表示するメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：disp_info
    引数：なし
    処理：
    氏名、年齢、性別、身長、体重を表示
    戻り値：なし
    '''

    def disp_info(self) -> None:
        print('氏名：{}'.format(self.__name))
        print('年齢：{} 歳'.format(self.__age))
        print('性別：{}'.format(self.__gender))
        print('身長：{} cm'.format(self.__height))
        print('体重：{} kg'.format(self.__weight))

    # BMI値を計算するメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：get_bmi
    引数：なし
    処理：
    身長（ｍ単位）と体重（ｋｇ単位）からBMI値を計算し返す
    計算式は以下の通り
    BMI値 = 体重（ｋｇ単位）／　身長（ｍ単位）の２乗
    戻り値：BMI値（型 float）
    '''

    def get_bmi(self) -> float:
        # 身長（ｃｍ単位）をｍ単位に換算
        height_m = self.__height / 100
        # BMI値を計算し返す
        return self.__weight / (height_m * height_m)

    # 適正体重を計算し肥満度（型 str）を返す
    '''
    メソッドシグニチャ
    メソッド名：get_obestity
    引数：なし
    処理：
    BMI値をもとめその値により肥満度を判断し
    肥満度を示す文字列を返す
    肥満度を示す文字列は以下の通り
    BMI値が
    １８．５未満なら　'低体重（やせ型）'
    １８．５以上、２５未満なら '普通体重'
    ２５以上、３０未満なら '肥満（１度）'
    ３０以上、３５未満なら '肥満（２度）'
    ３５以上、４０未満なら '肥満（３度）'
    ４０以上なら '肥満（４度）'
    戻り値：肥満度を表す文字列（型 str）
    '''

    def get_obesity(self) -> str:
        # get_bmiメソッドを呼び出しBMI値を変数bmiに代入
        bmi = self.get_bmi()
        # BMI値を判断して肥満度を表す文字列を返す
        if bmi < 18.5:
            return '低体重（やせ型）'
        elif bmi < 25:
            return '普通体重'
        elif bmi < 30:
            return '肥満（１度）'
        elif bmi < 35:
            return '肥満（２度）'
        elif bmi < 40:
            return '肥満（３度）'
        else:
            return '肥満（４度）'

    # 身長から適正体重を計算し返すメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：suitable_weight
    引数：なし
    処理：
    身長（ｍ単位）から適正体重（ｋｇ単位）を計算し返す
    適正体重は以下の計算式に従う
    適正体重 = 身長（ｍ単位）の２乗 x ２２
    戻り値：適正体重（型 float）
    '''

    def suitable_weight(self) -> float:
        # 身長（ｃｍ単位）をｍ単位に換算する
        height_m = self.__height / 100
        # 適正体重を計算し返す
        return height_m * height_m * 22


# Personクラスのインスタンス（オブジェクト）を生成
'''
氏名 = 鈴木一郎
年齢 = 42
性別 = 男性
身長（ｃｍ単位） = 179.3
体重（ｋｇ単位） = 72.7
'''
person = Person("鈴木一朗", 42, "男性", 179.3, 72.7)
# 個人情報を表示
person.disp_info()
# BMI値を表示
print('BMI値 = {}'.format(person.get_bmi()))
# 肥満度を表示
print('肥満度判定 = {}'.format(person.get_obesity()))
# 適正体重を表示
print('適正体重 = {} kg'.format(person.suitable_weight()))
print('情報を修正します。')
# 年齢修正を表示
print('年齢を {} から {} に修正します。'.format(person.age, 44))
# セッターを使用して、年齢を４４に設定
person.age = 44
# 身長修正を表示
print('身長を {} から {} に修正します。'.format(person.height, 178.5))
# セッターを使用して、身長を１７８．５に設定
person.height = 178.5
# 体重修正を表示
print('体重を {} から {} に修正します。'.format(person.weight, 88.9))
# セッターを使用して、体重を８８．９に設定
person.weight = 88.9
print('データ修正後の情報')
# 個人情報を表示
person.disp_info()
# BMI値を表示
print('BMI値 = {}'.format(person.get_bmi()))
# 肥満度を表示
print('肥満度判定 = {}'.format(person.get_obesity()))
# 適正体重を表示
print('適正体重 = {} kg'.format(person.suitable_weight()))