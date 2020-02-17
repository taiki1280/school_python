from bottle import route, run, template

# アイテム一覧を戻す関数
@route("/web_list")
def web_list():
  # ダミーデータ(あとでDBから取得するようにする)
  item_list = [
    {"id": 1, "name": "りんご"},
    {"id": 2, "name": "ばなな"},
    {"id": 3, "name": "すいか"},
  ]

  # 表示はテンプレートを返すだけ
  return template("web_list_Bottle.html", item_list = item_list)

# サーバを起動（localhost:8888）で起動する設定
run(host = 'localhost', reloader = True, port = 8888)