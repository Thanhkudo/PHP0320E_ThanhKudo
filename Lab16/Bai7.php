<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 7</title>
</head>
<body>
<?php
$arr = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0];
echo 'Các số từ 100 đến 200 và chia hết cho 5 trong mảng là: ';
foreach ($arr as $value){
    if($value<=200 && $value>=100 && $value%5==0){
        echo $value.' ';
    }
}
?>
</body>
</html>