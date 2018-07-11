

# ncコマンドで通信

nc example.jp 80

GET / HTTP/1.1
GET /31/31-001.php HTTP/1.1
Host: example.jp
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:60.0) Gecko/20100101 Firefox/60.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
Accept-Language: ja,en-US;q=0.7,en;q=0.3
Connection: keep-alive
Upgrade-Insecure-Requests: 1

# Socket通信

Python版    


```
get.py
python tcp_client.py
```


https://qiita.com/msrks/items/0550603efc59f6e8ba09


