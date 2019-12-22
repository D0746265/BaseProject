<?php
$ac = $_POST["ac"];
$pw = $_POST["pw"];
$DBHOST = "localhost"; //主機位置
$conn = mysql_connect( $DBHOST,$ac,$pw); //連接資料庫
if (empty($conn)){
    echo '<p style="text-align: center;">登入資訊錯誤<br></p>';
    die('<br><form style="text-align: center;" 
        action="../index.html" method="post">
        <input type="submit" value="返回首頁"/></form>');
}
mysql_close($conn);
?>

<html>

<head>
</head>

<body>
<h2 style="text-align: center;">歡迎!&nbsp"<?php echo $ac; ?>"</h2>
<!-- 基本理財測試 -->
<p style="text-align: center;">下面基本理財測試</p>
<form style="text-align: center;" action="./MM/MoneyManage.php" method="post">
<input type="hidden" name="ac" value="<?php echo $ac?>"/>
<input type="hidden" name="pw" value="<?php echo $pw?>"/>
<input type="submit" value="基 本 理 財">
</form>
<!-- 查詢測試 -->
<p style="text-align: center;">下面查詢測試</p>
<form style="text-align: center;" action="./SR/SearchRecord.php" method="post">
<input type="hidden" name="ac" value="<?php echo $ac?>"/>
<input type="hidden" name="pw" value="<?php echo $pw?>"/>
<input type="submit" value="查 詢">
</form>
<!-- 登出(返回首頁) -->
<br>
<form style="text-align: center;" action="../index.html" method="post">
<input type="submit" value="登出">
</form>
</body>

</html>