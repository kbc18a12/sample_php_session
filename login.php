<?php
$id = 'guest';
$pass = 'guestpass';
if( ( $_POST["userid"] != $id ) || ( $_POST["passwd"] != $pass) ){
   header('Location: ./login.html');
}

$token = sha1( rand() );
setcookie("token", $token);
setcookie("id", $id);
header('Location: ./result.php');
?>
