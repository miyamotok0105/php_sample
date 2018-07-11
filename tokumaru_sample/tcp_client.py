import socket

msg = b'GET /31/31-001.php HTTP/1.1\r\n'
msg += b'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:60.0) Gecko/20100101 Firefox/60.0\r\n'
msg += b'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n'
msg += b'Accept-Language: ja,en-US;q=0.7,en;q=0.3\r\n'
msg += b'Connection: keep-alive\r\n'
msg += b'Upgrade-Insecure-Requests: 1\r\n'
msg += b'Host: example.jp\r\n'
msg = msg + b'\r\n'
msglen = len(msg)


client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client.connect(("example.jp",80))
# client.send(b"GET / HTTP/1.1\r\nHost: google.com\r\n\r\n")
client.send(msg)
response = client.recv(4096)
print(response)



