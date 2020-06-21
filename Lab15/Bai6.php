<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 6</title>
    <style type="text/css">
        .container{
            width: 30%;
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Tính tổng</h3>
    <?php
    function tinh($a){
        $s = 0;
        for ($i=1;$i<=$a;$i++){
            $s += $i;
        }
        return $s;
    }
    $n=20;
    $s=tinh($n);
    echo "N = $n <br> ";
    echo "Tổng các số từ 1 đến $n = $s";
    ?>
</div>
</body>
</html>