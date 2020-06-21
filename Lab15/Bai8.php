<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 8</title>
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
    <h3>Hiển thị hai chiều</h3>
    <?php
    function htx($n) {
        $str1 = '';
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $str1 .= " * ";
            }
            $str1 .= "<br />";
        }
        return $str1;
    }
    function htn($n) {
        $str2 = '';
        for ($i = $n; 0<$i && $i<= $n; $i--) {
            for ($j = $i;0<$j && $j <= $i; $j--) {
                $str2 .= " * ";
            }
            $str2 .= "<br />";
        }
        return $str2;
    }
    $n=5;
    echo "N = $n <br> ";
    $str1 = htx($n);
    $str2 = htn($n);
    echo $str1.$str2;


    ?>
</div>
</body>
</html>