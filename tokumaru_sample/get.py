import urllib.request, urllib.parse
params = {
    "name": "yoheim",
    "age": 29,
    "comment": "ああああ"
}
# p = urllib.parse.urlencode(params)
# url = "http://example.jp/31/31-001.php" + p
url = "http://example.jp/31/31-001.php"

print("=======url=======")
print(url)

print("=======body=======")
with urllib.request.urlopen(url) as res:
   html = res.read().decode("utf-8")
   print(html)

# # または簡単なパラメータの場合には、自分でつけちゃっても良い
# url = "http://www.yoheim.net/blog.php?q=%d" % 20160203
# print(url)
