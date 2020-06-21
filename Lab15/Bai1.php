<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài1</title>
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
        <h3>Chu vi và diện tích hình chữ nhật</h3>
        <?php
            function phcn($a,$b){
                $p=($a+$b)*2;
                return $p;
            }

        function shcn($a,$b){
            $s=$a*$b;
            return $s;
        }

        $d=10;
        $r=5;
        echo 'Chiều dài hình chữ nhật = '.$d.'m <br>';
        echo 'Chiều rộng hình chữ nhật = '.$r.'m<br>';
        echo 'Chu vi hình chữ nhật = '.phcn($d,$r).'m<br>';
        echo 'Diện tích hình chữ nhật = '.shcn($d,$r).'m<sup>2</sup><br>';
        ?>

    </div>
</body>
</html>