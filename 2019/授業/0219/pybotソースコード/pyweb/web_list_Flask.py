from flask import Flask, render_template

# インスタンス生成
app = Flask(__name__)
@app.route("/web_list")

# アイテム一覧を戻す関数
def web_list():
  # ダミーデータ(あとでDBから取得するようにする)
  item_list = [
    {"id": 1, "name": "りんご"},
    {"id": 2, "name": "ばなな"},
    {"id": 3, "name": "すいか"},
  ]

  # 表示はテンプレートを返すだけ
  return render_template('web_list_Flask.html', item_list = item_list)

if __name__ == "__main__":
  # webサーバー立ち上げ
  app.run()