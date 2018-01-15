<?php
ob_start();

setcookie("user", "", time()-3600);
header("location:home.php");
?>