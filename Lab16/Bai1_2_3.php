<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 1+2+3</title>
</head>
<body>
<?php
    function tong($arr){
        $tong = '';
        $tinh=array_sum($arr);
        $ketqua='';
        foreach ($arr as $key =>$value){
            if($key == count($arr)-1){
                $tong .= " $value ";
            }
            else{
                $tong .= " $value + ";
            }
        }
        $ketqua.= "Tổng các phần tử = ".$tong." = ".$tinh."<br>";
        return $ketqua;
    }
function tich($arr){
    $tich = '';
    $tinh=1;
    $ketqua='';
    for($i=0;$i<count($arr);$i++){
        $tinh *=$arr[$i];
    }
    foreach ($arr as $key =>$value){
        if($key == count($arr)-1){
            $tich .= " $value ";
        }
        else{
            $tich .= " $value * ";
        }
    }
    $ketqua.= "Tích các phần tử = ".$tich." = ".$tinh."<br>";
    return $ketqua;
}
function thuong($arr){
    $thuong = '';
    $tinh=$arr[0];
    $ketqua='';
    for($i=0;$i<count($arr)-1;$i++){
        $tinh /=$arr[$i+1];
    }
    foreach ($arr as $key =>$value){

        if($key == count($arr)-1){
            $thuong .= " $value ";
        }
        else{
            $thuong .= " $value / ";
        }
    }
    $ketqua.= "Thương các phần tử = ".$thuong." = ".$tinh."<br>";
    return $ketqua;
}
function hieu($arr){
    $hieu ='';
    $ketqua='';
    $tinh=$arr[0];
    for($i=0;$i<count($arr)-1;$i++){
        $tinh -=$arr[$i+1];
    }
    foreach ($arr as $key =>$value){
        if($key == count($arr)-1){
            $hieu .= " $value ";
        }
        else{
            $hieu .= " $value - ";
        }
    }
    $ketqua.= "Hiệu các phần tử = ".$hieu." = ".$tinh."<br>";
    return $ketqua;
}


    $arr1 = [2, 5, 2];
    echo tong($arr1);
    echo hieu($arr1);
    echo tich($arr1);
    echo thuong($arr1);
?>
<br><br>
<!--Bài 2:-->
<?php
$arr2 = ['đỏ','xanh','cam','trắng'];
echo"Màu <span style='color: red'>$arr2[0]</span> là màu yêu thích của Anh, <span style='color: red'>$arr2[1]</span> 
là màu yêu thích của Sơn, <span style='color: red'>$arr2[2]</span> là màu yêu thích của Thắng, 
còn màu yêu thích của tôi là màu <span style='color: red'>$arr2[3]</span>.";
?>
<br><br><br>
<!--Bài 3:-->
<?php
    $arr3=['PHP','HTML','CSS','JS'];
?>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Tên Khóa Học</th>
    </tr>
    <?php foreach ($arr3 as $value):?>
    <tr>
        <td><?php echo "$value";?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>