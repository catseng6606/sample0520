<?php
/*
TODO: 這是一個付款的網頁，使用者可以在這裡付款給指定的帳號
1. 付款的帳號是 userA from session["users"] 收款的帳號是 $_GET["to"] 
2. 付款的金額是 $_GET["money"]，轉帳的總計存在 session["pay"][$GET["to"] ] 中
3. 未登入的使用者無法進入這個頁面，請導到登入頁面login.php
4. 範例網址為 http://localhost/csrf/pay.php?to=userC&money=100
*/
    session_start();
    $user = "";
    if (!isset($_SESSION["user"])) {
        echo "You are not logged in. Please log in first.";
        echo "<a href='login.php'>Login</a>";
        exit(); 
    } else {
        $user = $_SESSION["user"];
    }
    $to = $_GET["to"];
    $money = $_GET["money"];
    if (!isset($_SESSION["pay"][$to])) {
        $_SESSION["pay"][$to] = 0;
    }
    $_SESSION["pay"][$to] += $money;    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>CSRF Test Pay</h1>";
    echo "<h2>Welcome, ".htmlentities($user)."</h2>";
    echo "<h2>Pay to: ".htmlentities($to)."</h2>";
    echo "<h2>Money: ".htmlentities($money)."</h2>";
    echo "<h2>Total: ".htmlentities($_SESSION["pay"][$to])."</h2>";
?>
</body>
</html>