```
GET http://localhost:8000/hello/

HTTP/1.1 200 OK
Server: nginx/1.17.8
Date: Thu, 23 Jan 2020 17:53:25 GMT
Content-Type: text/html; charset=UTF-8
Transfer-Encoding: chunked
Connection: keep-alive
X-Powered-By: PHP/7.4.1

It works

Response code: 200 (OK); Time: 116ms; Content length: 8 bytes
```

```
POST http://localhost:8000/hello/

HTTP/1.1 404 Not Found
Server: nginx/1.17.8
Date: Thu, 23 Jan 2020 17:53:50 GMT
Content-Type: text/plain;charset=utf-8
Transfer-Encoding: chunked
Connection: keep-alive
X-Powered-By: PHP/7.4.1

Not found

Response code: 404 (Not Found); Time: 121ms; Content length: 9 bytes
```