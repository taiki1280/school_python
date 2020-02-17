from bottle import route, run

# /hello にアクセスしたらhello()関数が呼ばれる
@route("/hello")
def hello():
  # 画面に表示されてほしいHTMLを返す
  return "<h1>Python Webプログラム（Bottle版）</h1>"

# サーバを起動（localhost:8888）で起動する設定
run(host = 'localhost', reloader = True, port = 8888)