<?php
$id = 'guest';
$pass = 'guestpass';
session_start();
if( ( $_POST["userid"] != $id ) || ( $_POST["passwd"] != $pass) ){
   header('Location: ./session_login.html');
}
$token = sha1( rand() );
$_SESSION["token"] = $token; //tokenという名前でsession情報を管理
$_SESSION["id"] = $id;  //idという名前でセッション情報を管理
header('Location: ./session_result.php');
?>
