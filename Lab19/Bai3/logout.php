<?php
session_start();
unset($_SESSION['user']);
setcookie('user','$user',time()-1);
setcookie('pass','$pass',time()-1);
$_SESSION['logout']="Logout thành công!";
header('Location: index.php');
exit();

?>