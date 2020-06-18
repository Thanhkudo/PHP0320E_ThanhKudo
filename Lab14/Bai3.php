<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .container{
            padding-top: 9em;
            width: 50%;
            margin: auto;
        }
        table{margin: auto; font-size: 20px;text-align: center  }
        td, th{padding: 5px}
    </style>
</head>
<body>
<?php
$var1 = 'Đỗ Như Thanh';
$var2 = 29;
$var3 ='10/01/1998';
$var4 = 'Nam';
$var5 = 'Phú Lương, Hà Đông-Hà Nội';
?>
<div class="container">
    <table border="1px">
        <tr>
            <th>Họ tên</th>
            <th>Tuổi</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
        </tr>
        <tr>
            <td><?php echo "$var1";?></td>
            <td><?php echo "$var2";?></td>
            <td><?php echo $var3;?></td>
            <td><?php echo "$var4";?></td>
            <td><?php echo "$var5";?></td>
        </tr>
    </table>
</div>
</body>
</html>