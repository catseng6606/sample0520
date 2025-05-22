<?php
session_start();
$user = "";
if (!isset($_SESSION["user"])) {
    echo "You are not logged in. Please log in first.";
    echo "<a href='login.php'>Login</a>";
    exit(); 
} else {
    $user = $_SESSION["user"];
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
    1. 有登入才有權限進入此畫面，沒登入請導到登入頁面login.php
    2. 登入後，使用者可以看到自己的帳號    
    --->
    <h1>CSRF Test Index</h1>
    <h2>Welcome, <?php echo  htmlentities($user); ?></h2>
</body>
</html>