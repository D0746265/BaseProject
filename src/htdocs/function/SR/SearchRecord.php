<?php
$ac = $_POST["ac"];
$pw = $_POST["pw"];
$DBHOST = "localhost"; //主機位置
$conn = mysql_connect( $DBHOST,$ac,$pw); //連接資料庫
if (empty($conn)){
  echo '<p style="text-align: center;">登入資訊錯誤<br></p>';
  die('<br><form style="text-align: center;" 
      action="../../index.html" method="post">
      <input type="submit" value="返回首頁"/></form>');
}
mysql_close($conn);
?>

<html>
<body>
    <!--測試-->
    <h1 style="text-align: center;">查詢</h1>
    
    <form style="text-align: center;" action="./S_record.php" method="post">
        <input type="hidden" name="ac" value="<?php echo $ac?>"/>
        <input type="hidden" name="pw" value="<?php echo $pw?>"/>
        <input type="submit" value="顯示月報表(前十筆)"/>
    </form>
    <br>
    <form style="text-align: center;" action="../function.php" method="post">
    <input type="hidden" name="ac" value="<?php echo $ac?>"/>
    <input type="hidden" name="pw" value="<?php echo $pw?>"/>
    <input type="submit" value="返回功能列表"></form>
</body>
</html>