<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 4</title>
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
    <h3>Hiển thị chuỗi</h3>
    <?php
    function chuoi($a){
        $str='';
        for ($i=1;$i<=$a;$i++){
            if($i==$a){
                $str .= $i;
            }
            else{
                $str .= $i." - ";
            }

        }
        return $str;
    }


    $n=6;
    $str=chuoi($n);
    echo "N = $n <br>";
    echo 'Chuổi có dạng: <br> ';
    echo $str;
    ?>

</div>
</body>
</html>