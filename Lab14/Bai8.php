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
            width: 250px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tính chu vi diện tích hình chữ nhật</h2>
    <?php
    function tinh($a, $b, $s=0, $p=0){
             $s += $a*$b;
             $p += ($a+$b)*2;
        echo"<h3>Chiều dài hình chữ nhật: </h3>$a <br>";
        echo"<h3>Chiều rộng hình chữ nhật: </h3>$b <br>";
        echo"<h3>Diện tích hình chữ nhật: </h3>$s<br>";
        echo"<h3>Chu vi hình chữ nhật: </h3>$p<br>";
    }

    tinh(4, 6);
    ?>
</div>
</body>
</html>