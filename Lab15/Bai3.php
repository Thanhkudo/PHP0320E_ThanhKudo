<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 3</title>
    <style type="text/css">
        .container{
            width: 30%;
            margin: auto;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Chu vi và diện tích hình tron</h3>
    <?php
    function pht($a){
        $p= $a * 3.14 ;
        return $p;
    }

    function sht($a){
        $s=($a/2)*($a/2) *3.14 ;
        return $s;
    }

    $r=6;

    echo "Đường kính hình tròn = $r m<br>";
    echo 'Chu vi hình chữ nhật = '.pht($r).' m<br>';
    echo 'Diện tích hình chữ nhật = '.sht($r).' m<sup>2</sup><br>';
    ?>

</div>
</body>
</html>