<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 9</title>
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
            text-align: center;
        }
        table th {
            color: red;
            background: #72f8ff;
        }
        table td{
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Bảng cửu chương</h3>
    <table border="1px">
        <tr>
            <?php
            for ($i = 1;$i <= 5;$i++){
                echo"<th>$i</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
                for ($i = 1;$i <= 5;$i++) {
                    echo '<td>';
                    for ($j = 1; $j <= 10; $j++){
                        echo"$i x $j =".($i*$j)."<br>";
                    }
                    echo'</td>';
                }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 6;$i <= 10;$i++){
                echo"<th>$i</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 6;$i <= 10;$i++) {
                echo '<td>';
                for ($j = 1; $j <= 10; $j++){
                    echo" $i x $j =".($i*$j)."<br>";
                }
                echo'</td>';
            }
            ?>
        </tr>
    </table>
</div>
</body>
</html>