from bottle import route, run, template, request

@route('/web_form')
def web_form():
  return template('web_form_Bottle.html',
      name = '', address = '')

@route('/web_form', method = 'POST')
def web_form():
  name_text = request.forms.name
  address_text = request.forms.address
  return template('web_form_Bottle.html',
      name = name_text,
      address = address_text)

run(host = 'localhost', port = 8888, reloader = True)