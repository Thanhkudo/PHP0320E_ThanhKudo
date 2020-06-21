<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 10</title>
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
        .do{
            width: 50px;
            height: 50px;
            background: #fff;
        }
        .den{
            width: 50px;
            height: 50px;
            background: black;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Bàn cờ</h3>
    <table border="1px">
            <?php
            for ($i = 1;$i <= 8;$i++) {
                echo '<tr>';
                for ($j = 1; $j <= 8; $j++){
                    $so_o =$i+$j;
                    if($so_o%2==0){
                        echo '<td class="den"></td>';
                    }
                    else{
                        echo '<td class="do"></td>';
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