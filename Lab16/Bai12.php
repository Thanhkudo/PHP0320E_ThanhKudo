<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 12</title>
</head>
<body>
<?php
$a = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
echo"Mảng ban đầu";
echo "<pre>";
print_r($a);
echo "<pre>";

echo "Phần tử đầu tiên trong mảng:".reset($a)."<br>" ;

echo "Phần tử cuối cùng trong mảng:".end($a)."<br>" ;


echo"Số lớn nhất trong mảng: ".max($a)."<br>";

echo"Số bé nhất trong mảng: ".min($a)."<br>";

echo"Tổng giá trị của mảng: ".array_sum($a)."<br>";

echo "Sắp xếp tăng dần theo giá trị:<br>";
$asort = asort($a);
foreach ($a as $value){
    echo "$value <br>";
}

echo "Sắp xếp giảm dần theo giá trị:<br>";
$arsort = arsort($a);
foreach ($a as $value){
    echo "$value <br>";
}

echo "Sắp xếp tăng dần theo key:<br>";
$ksort = ksort($a);
foreach ($a as $value){
    echo "$value <br>";
}

echo "Sắp xếp giảm dần theo key:<br>";
$krsort = krsort($a);
foreach ($a as $value){
    echo "$value <br>";
}
?>
</body>
</html>