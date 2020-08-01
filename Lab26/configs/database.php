<?php
const DB_Loaclhost ='localhost';
const DB_USER ='root';
const DB_PASS ='';
const DB_NAME ='bt1';
const DB_PORT ='3306';
$conn=mysqli_connect(DB_Loaclhost,DB_USER,DB_PASS,DB_NAME,DB_PORT);
if ($conn){
    $_SESSION['conn']= "Kết nối thành công!";
}
else{
    die("Kết nối thất bại".mysqli_connect_error());
}