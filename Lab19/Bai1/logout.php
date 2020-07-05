<?php
session_start();
unset($_SESSION['user']);
$_SESSION['logout']="Logout thành công!";
header('Location: login.php');
exit();

?>