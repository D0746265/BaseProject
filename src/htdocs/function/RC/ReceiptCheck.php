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
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>發票核對</title>
        <link ref="stylesheet" href="style.css">
    </head>
    <body style="font-family: 'Lato', 'Microsoft JhengHei', '微軟正黑體', sans-serif;">
        <div class="container" style="margin-top: 30px;">
            <form style="text-align: center;">
              <div class="form-group">
                <label for="input-temp" id="label-temp">輸入愈核對之發票號碼:</label>
                
                <input type="number" class="form-control" id="input-temp" />
                <small id="error-msg" style="color: red;"></small>
              <button type="button" class="btn btn-primary" onclick="changeSrc_input()" >送出</button>
             <br><label for="input-temp1" id="label-temp">~待輸入~</label>
            </form> 
            <hr>
            <form style="text-align: center;" action="../function.php" method="post">
              <input type="hidden" name="ac" value="<?php echo $ac?>"/>
              <input type="hidden" name="pw" value="<?php echo $pw?>"/>
            <input type="submit" value="返回功能列表"></form>
          
       
        <script type="text/javascript">
          function check(){
              if(document.getElementById("input-temp").value==""){
                document.getElementById("error-msg").innerHTML = "<br>請輸入正確的發票號碼";
                return false;
              }
              document.getElementById("error-msg").innerHTML = "";
              return true;
          }
          function changeSrc_input(){
              var numId = document.getElementById("input-temp1").value;
              if (check()) {
                var code=document.getElementById("jscode");
                if(!code) return;
                document.body.removeChild(code);
                code=document.createElement("script");
                code.id="jscode";
                switch (numId) {
                  case '41482012':
                  document.getElementById("input-temp1").innerHTML = "特別獎!"
                    break;

                  case '58837976':
                    document.getElementById("input-temp1").innerHTML = "特獎!"
                    break;
                  
                  case '20379435':
                    document.getElementById("input-temp1").innerHTML = "頭獎!"
                    break;

                  case '47430762':
                    document.getElementById("input-temp1").innerHTML = "頭獎!"
                    break;

                  case '36193504':
                    document.getElementById("input-temp1").innerHTML = "頭獎!"
                    break;
                
                  default:
                  	document.getElementById("input-temp1").innerHTML = "可惜...沒中獎"
                    break;
                }
              }
          }
      </script>
      <script type="text/javascript" id="jscode"></script>
      
    </body>
</html>