<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 2</title>
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
    <h3>Chu vi và diện tích hình vuông</h3>
    <?php
    function phv($a){
        $p=$a*4;
        return $p;
    }

    function shv($a){
        $s=$a*$a;
        return $s;
    }

    $c=12;

    echo 'Cạnh hình vuông = '.$c.'m<br>';
    echo 'Chu vi hình vuông = '.phv($c).'m<br>';
    echo 'Diện tích hình vuông = '.shv($c).'m<sup>2</sup><br>';
    ?>

</div>
</body>
</html>