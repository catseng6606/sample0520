``` bash
curl http://localhost:8080/csrf/index.php
```

``` bash
curl -c cookies.txt \
-d "username=userA&password=password" \
-X POST http://localhost:8080/csrf/login.php
```

``` bash
curl -b cookies.txt http://localhost:8080/csrf/index.php
```