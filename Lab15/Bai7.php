<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 7</title>
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
    <h3>Hiển thị</h3>
    <?php
    function ht($n) {
        $str = '';
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $str .= " * ";
            }
            $str .= "<br />";
        }
        return $str;
    }
    $n=5;
    echo "N = $n <br> ";
    $str = ht($n);
    echo $str;


    ?>
</div>
</body>
</html>