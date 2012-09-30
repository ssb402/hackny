<html>
    
  <?php
  $code = $_GET['code'];
  $access_token = 
  $client_id = "OJNG52NOMHAGXBNQ2V1TWFRJ05PFRWK2AMWCZADNAPWVPZXW";
  $client_secret = "0AQTET2PEKE5DIY151VYV445ZNZIZRLYFPDMSIS4XMCFN12J";
  
  if($code) {
    header("Location: https://foursquare.com/oauth2/access_token?client_id=" . $client_id . "&client_secret=" . $client_secret . "&grant_type=authorization_code&redirect_uri=http://localhost/auth_success.php&code=" . $code . "");
  } else {
    header("Location: http://localhost");
  }
  
  ?>

</html>