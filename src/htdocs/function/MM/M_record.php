<?php
$url="./MoneyMange.html" ;
$inout=$_POST[inout];
$amo=$_POST[amount];
$descrption=$_POST[descrption];
$time=date("Y-m-d H:i:s");
//資料庫設定
$DBNAME = "lm_data"; //資料庫名稱
$DBHOST = "localhost"; //主機位置
$DBAC = "1"; //登入資料庫的帳號
$conn = mysql_connect( $DBHOST,$DBAC,"error"); //連接資料庫
if (empty($conn)){
  print mysql_error($conn);
  die ("無法連結資料庫<br>");
  exit;
}
if( !mysql_select_db("lm_data",$conn)) { //選擇資料庫
  die ("無法選擇資料庫<br>");
}
// 設定連線編碼
mysql_query( $conn, "SET NAMES utf8");
//餘額計算
$rs = mysql_query("SELECT * FROM `$DBAC` ORDER BY `time_stamp` DESC LIMIT 1");
$row = mysql_fetch_array($rs);
$total =$row['total'];
if($inout == "1"){
  $total += $amo;
}else if($inout == "0"){
  $total -= $amo;
}

//寫入
$sqlin ="INSERT INTO `$DBAC` (`time_stamp`, `method`, `amount`, `total`, `descrption`)
VALUES ('$time', '$inout', '$amo', '$total', '$descrption');";
$pass = mysql_query($sqlin) or die(mysql_error());
mysql_close($conn);
?>
<html>

<head>
<meta   http-equiv = "refresh"   content ="10;
url = <?php echo $url;  ?> ">
</head>

<body>
收入支出:&nbsp
<?php
if($inout == "1"){
  echo "收入";
}else if($inout == "0"){
  echo "支出";
}
?><br>
輸入之金額:&nbsp<?php echo $amo?><br>
詳細內容:<br>
<?php echo $descrption; ?><br>
<?php
if($total < "0" && $inout == "0"){
  echo "<h3>【注意：所剩餘額已達負值，提醒您請勿再支出】</h3>";
}
?>
<br>
頁面只停留10秒……
</body>

</html>