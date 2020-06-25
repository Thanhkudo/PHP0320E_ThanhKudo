<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 13</title>
</head>
<body>
<?php
$a = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$tb=array_sum($a)/count($a);
$lon='';
$nho='';
echo "Giá trị trung bình của mảng là: ".$tb."<br>";
foreach ($a as $value){
    if($value<=$tb){
        $nho .= " $value";
    }
    else{
        $lon .= " $value";
    }
}
echo"Các số có giá trị lớn hơn giá trị trung bình: ".$lon."<br>";
echo"Các số có giá trị bé hơn giá trị trung bình: ".$nho."<br>";

?>
</body>
</html>