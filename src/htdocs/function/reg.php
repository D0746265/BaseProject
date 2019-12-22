<html>
<body>

<h1 style="text-align: center;">註冊帳號</h1>

<form style="text-align: center;" action="./log.php" method="post">
    <input type="hidden" name="logreg" value="0"/>
    帳號：<br>
    <input type="text" name="ac" required="required" placeholder="請輸入帳號"><br>
    密碼：<br>
    <input type="password" name="pw" required="required" placeholder="請輸入密碼"><br>
    <br>
    <input type="submit" value="註冊"/>
</form>
<br>
<form style="text-align: center;" action="../index.html" method="post">
    <input type="submit" value="返回首頁">
</form>

</body>
</html>