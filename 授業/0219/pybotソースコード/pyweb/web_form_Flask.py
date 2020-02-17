from flask import Flask, render_template, request

# インスタンス生成
app = Flask(__name__)

@app.route('/web_form')
def web_form():
  return render_template('web_form_Flask.html',
      name = '', address = '')

@app.route('/web_form', methods = ['POST'])
def web_do_form():
  name_text = request.form['name']
  address_text = request.form['address']
  return render_template('web_form_Flask.html',
      name = name_text,
      address = address_text)

if __name__ == "__main__":
  # webサーバー立ち上げ
  app.run()