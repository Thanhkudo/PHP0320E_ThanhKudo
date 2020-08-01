<?php
const DB_DNS ='mysql:host=localhost;dbname=bt1';
const DB_USERNAME ='root';
const DB_PASSWORD ='';
try{
    $conn=new PDO(DB_DNS,DB_USERNAME,DB_PASSWORD);
}
catch (PDOException $e){
    echo"Lỗi kết nối CSDL !".$e->getMessage();
}