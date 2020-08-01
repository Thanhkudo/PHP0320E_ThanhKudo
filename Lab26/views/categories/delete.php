<?php
session_start();
require_once 'database.php';
if (!isset($_GET['id'])|| !is_numeric($_GET['id'])){
    $_SESSION['error']="ID  không hợp lệ !";
    header('Location:index.php');
    exit();
}
$id=$_GET['id'];
$delete="DELETE FROM employees WHERE id=$id";
$is_delete=mysqli_query($conn,$delete);
if ($is_delete){
    $_SESSION['error']="Xóa thành công !";
    header('Location:index.php');
    exit();
}
else{
    if ($is_delete){
        $_SESSION['error']="Không thể xóa nhân viên này !";
        header('Location:index.php');
        exit();
    }
}