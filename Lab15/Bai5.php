<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 5</title>
    <style type="text/css">
        .container{
            width: 40%;
            margin: auto;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Hiển thị chuỗi</h3>
    <?php
    function tinh($a){
        $s = 0;
        for ($i=1;$i<=$a;$i++){
            $s += 1/$i;
        }
        return $s;
    }


    $n=10;
    $s=tinh($n);
    $str='';
    echo "N = $n <br>";
    for ($i=1;$i<=$n;$i++){
        if ($i==$n){
            $str .= " 1/$i ";
        }
        else{
            $str .= " 1/$i +";
        }
    }

    echo "S($n) = $str = $s";
    ?>

</div>
</body>
</html>