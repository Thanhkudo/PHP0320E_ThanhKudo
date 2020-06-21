<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 11</title>
    <style type="text/css">
        .container{
            width: 80%;
            margin: auto;
        }
        h3{
            text-align: center;
        }
        table{
            margin: auto;
        }
        table td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        .snt{background: #2dcb00}
    </style>
</head>
<body>
<?php
    function snt ($n){
        $dem = 0;
        for ( $i=1; $i <= sqrt($n); $i++){
            if($n%$i==0)
                $dem++;
        }
        return $dem;
    }
?>

<div class="container">
    <h3>Xét số nguyên tố từ 1 đến 100</h3>
    <table border="1px">
        <?php
        for ($i = 0;$i <= 9;$i++) {
            echo '<tr>';
            for ($j = 1; $j <= 10; $j++){
                $so_o =$i*10+$j;
                if(snt($so_o)==1){
                    echo '<td class="snt">'.$so_o.'</td>';
                }
                else{
                    echo "<td> $so_o </td>";
                }
            }
            echo'</tr>';
        }
        ?>
        </tr>
    </table>
</div>
</body>
</html>