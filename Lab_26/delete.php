<?php
session_start();
require_once 'configs/database.php';
if (!isset($_GET['id'])|| !is_numeric($_GET['id'])){
    $_SESSION['error']="ID  không hợp lệ !";
    header('Location:index.php');
    exit();
}
$id=$_GET['id'];
$delete=$conn->prepare("DELETE FROM employees WHERE id=$id");
$is_delete = $delete->execute();
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