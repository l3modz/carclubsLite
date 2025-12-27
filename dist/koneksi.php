<?php
$version = '1.2';

	$Open = mysqli_connect("localhost","parlind-desktop","yourpasswordDB","carclubs");
//$projectStackNan= $mysqli = new mysqli("localhost","root","","printgajilemodprintencrypted01");
// Check connection
if ($Open -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
    $output = false;
    $encrypt_method = "AES-256-CBC";
    //$secure_key = 'replace_this_with_your_env_or_secure_key_MD5_generator_online_for_mankind_Goodness';
    $secret_key = '25f2bf8046aa28e9149941592bc18b5a';
    $secret_iv = '25f2bf8046aa28e9149941592bc18b5a';
    $titleWeb='Car Clubs';
    $emailAdmin='yourEmailAdmin@gmail.com';
    //please_always_use_email.    
?>

