<?php
session_start();
?>
<html>
<body>
<?=$_SESSION["id"] ?>さんがログインしました。<br>
<br>
token:<?=$_SESSION["token"] ?>
</body>
</html>
