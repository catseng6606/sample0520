<?php
    session_start();
    $msg = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "userA" && $password == "password") {
            $_SESSION["user"] = $username;
            header("Location: index.php");
            exit;
        } else {
            $msg = "Invalid username or password.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TODO: 
    1. Login page 包含 帳號密碼
    2. 帳號密碼正確後，將使用者資料存在 session 中
    3. 登入後，使用者導址到 index.php，顯示使用者的帳號     
    -->
    <h1>CSRF Test Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
        <span><?php echo $msg ;?></span>        
    </form>

</body>
</html>