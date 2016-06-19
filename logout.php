<?php
session_start();
$_SESSION = array();
setcookie("basket", "",  time() + 3600);
header("Location: login.php");
?>
