<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .container{
            width: 30%;
            margin: 50px auto;
        }
        h3{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Thông tin cá nhân</h2>
<?php
    function hienthi($a, $b, $c){
        echo"<h3>Họ Tên: </h3>$a <br>";
        echo"<h3>Tuổi: </h3>$b <br>";
        echo"<h3>Giới tính: </h3>$c <br>";
    }

    hienthi('Thanh', '22', 'Nam');
?>
</div>
</body>
</html>