import requests
r = requests.get("https://book.impress.co.jp/category/series/easybook/")
print(r.status_code)
print(r.text)
