<html>
    
  <?php
  ini_set('display_errors', 'On');
  $code = $_GET['code'];
  $access_token = 
  $client_id = "OJNG52NOMHAGXBNQ2V1TWFRJ05PFRWK2AMWCZADNAPWVPZXW";
  $client_secret = "0AQTET2PEKE5DIY151VYV445ZNZIZRLYFPDMSIS4XMCFN12J";
  
  if($code) {
    $url="https://foursquare.com/oauth2/access_token?client_id=" . $client_id . "&client_secret=" . $client_secret . "&grant_type=authorization_code&redirect_uri=http://localhost/auth_success.php&code=" . $code . "";
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);
 $arr= json_decode($response,true);
 echo $arr['access_token'];
echo 'tp';
  } else {
    header("Location: http://localhost");
  }
  
  ?>

</html>