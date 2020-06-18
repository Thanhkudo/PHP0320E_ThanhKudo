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
            width: 30%;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
$var1 = '123abc';
$var2 = null;
$var3 ='';
$var4 = 'abc123';
$var5 = 'null';
?>
<div class="container">
    <table border="1px">
        <tr>
            <td>Khai báo biến</td>
            <td>Ép sang Int</td>
            <td>Ép sang Float</td>
            <td>Ép sang String</td>
            <td>Ép sang Boolean</td>
        </tr>
        <tr>
            <td>$var1 = <?php echo "$var1";?></td>
            <td><?php echo (int)"$var1";?></td>
            <td><?php echo (float)"$var1";?></td>
            <td><?php echo (string)"$var1";?></td>
            <td><?php echo (boolean)"$var1";?></td>
        </tr>
        <tr>
            <td>$var1 = <?php echo "$var2";?></td>
            <td><?php echo (int)"$var2";?></td>
            <td><?php echo (float)"$var2";?></td>
            <td><?php echo (string)"$var2";?></td>
            <td><?php echo (boolean)"$var2";?></td>
        </tr>
        <tr>
            <td>$var1 = <?php echo "$var3";?></td>
            <td><?php echo (int)"$var3";?></td>
            <td><?php echo (float)"$var3";?></td>
            <td><?php echo (string)"$var3";?></td>
            <td><?php echo (boolean)"$var3";?></td>
        </tr>
        <tr>
            <td>$var1 = <?php echo "$var4";?></td>
            <td><?php echo (int)"$var4";?></td>
            <td><?php echo (float)"$var4";?></td>
            <td><?php echo (string)"$var4";?></td>
            <td><?php echo (boolean)"$var4";?></td>
        </tr>
        <tr>
            <td>$var1 = <?php echo "$var5";?></td>
            <td><?php echo (int)"$var5";?></td>
            <td><?php echo (float)"$var5";?></td>
            <td><?php echo (string)"$var5";?></td>
            <td><?php echo (boolean)"$var5";?></td>
        </tr>

    </table>
</div>
</body>
</html>