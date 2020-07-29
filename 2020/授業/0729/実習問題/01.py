# 自動車（Car）クラスの定義
class Car:
    # コンストラクタ定義
    '''
    name: str（車種）アクセス属性：public
    distance: int（走行距離ｋｍ）アクセス属性：public
    '''
    def __init__(self, name: str, distance: int) -> None:
        self.name = name
        self.distance = distance

    # 発進の表示：departureメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：departure
    引数：なし
    処理：'発進します！！'と表示
    戻り値：なし
    '''

    def departure(self) -> None:
        print("発進します。")

    # 進んだ距離の表示：runningメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：running
    引数：なし
    処理：現在何ｋｍ進んだかを表示
    戻り値：なし
    '''

    def running(self) -> None:
        print(f"{self.distance}km進みました。")

    # 前進の計算と表示：goメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：go
    引数：なし
    処理：'１ｋｍ前進します！！'と表示し、フィールドdistanceをインクリメント
    '''

    def go(self) -> None:
        print("1km前進します。")
        self.distance += 1

    # 更新の計算と表示：backメソッドの定義
    '''
    メソッドシグニチャ
    メソッド名：back
    引数：なし
    処理：'１ｋｍ後進します！！'と表示し、フィールドdistanceをデクリメント
    '''

    def back(self) -> None:
        print("1km後進します。")
        self.distance -= 1

    # Carクラスを使用したサンプル

    # Carクラスのインスタンスを生成し、変数carに代入
    # 車種 = 乗用車、走行距離 = 0


car = Car(name="乗用車", distance=0)
# 発進を表示
car.departure()

# １０ｋｍ前進
for _ in range(10):
    car.go()

# 進んだ距離を表示
car.running()

# ３ｋｍ後進
for _ in range(3):
    car.back()

# 進んだ距離を表示
car.running()
