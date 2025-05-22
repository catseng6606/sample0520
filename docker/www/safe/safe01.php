<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // TODO: Set php httpOnly and secure flags for session cookies
        // 1. Set httpOnly and secure flags for session cookies
        // 2. Set session cookie lifetime to 1 hour
        // 3. Set session cookie path to "/"
        // 4. Set session cookie domain to ".example.com"
        // 5. Set session cookie SameSite attribute to "Strict"
        // 6. Set session cookie HttpOnly attribute to true
        // 7. Set session cookie Secure attribute to true
        // 8. Set session cookie Path attribute to "/"
        
        session_start();
        header("Content-Security-Policy: default-src 'self'; script-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline';");
        header("httpOnly");
        header("secure");
        header("SameSite=Strict");
        header("Path=/");
        header("Domain=.example.com");
    ?>
</body>
</html>