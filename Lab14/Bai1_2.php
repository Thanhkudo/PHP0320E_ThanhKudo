<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 1_2</title>
<style type="text/css">
	.container{
		width: 40%;
		margin: auto;
	}
	table{width: 100%}
	p{text-align: center}
</style>
</head>
<body>
	<?php
    $variable1 = '1.23';
    $check1 = is_string($variable1);
    var_dump($check1);
    $variable2 = 28;
    var_dump(is_int($variable2));
    $variable3 = 'null';
    var_dump(is_string($variable3));
    $variable4 = [123, false, null, 1.23, [], false,true ];
    var_dump(is_array($variable4));
    $variable5 = -1.23;
    var_dump(is_float($variable5));
    $variable6 = 'false';
    var_dump(is_string($variable6));
    $variable7 = 'php';
    var_dump(is_string($variable7));
    echo"<p>Today I \'ll learn PHP - \"Variable\"</p>";
 	?>
 	<div class="container">
	    <table border="1px">
	        <tr>
	            <td>STT</td>
	            <td>Khai báo</td>
	        </tr>
	        <tr>
	            <td>1</td>
	            <td>$variable1 = <?php echo "$variable1";?></td>
	        </tr>
	        <tr>
	            <td>2</td>
	            <td>$variable2 = <?php echo "$variable2";?></td>
	        </tr>
	        <tr>
	            <td>3</td>
	            <td>$variable3 = <?php echo "$variable3";?></td>
	        </tr>
	        <tr>
	            <td>4</td>
	            <td>$variable4 = <?php echo '<pre>'; print_r($variable4); echo'</pre>';?></td>
	        </tr>
	        <tr>
	            <td>5</td>
	            <td>$variable5 = <?php echo "$variable5";?></td>
	        </tr>
	        <tr>
	            <td>6</td>
	            <td>$variable6 = <?php echo "$variable6";?></td>
	        </tr>
	        <tr>
	            <td>7</td>
	            <td>$variable7 = <?php echo "$variable7";?></td>
	        </tr>

	    </table>

    </div>
</body>
</html>