<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai 5</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container{
            margin: 50px auto;
        }
        .error{
            color: red;
        }
        .result{
            color: blue;
        }
    </style>
</head>
<body>
<?php
    $error='';
    $result='';
    $a='';
    $b='';
    function cong($a,$b){
        $kq =$a+$b;
        return $kq;
    }
    function tru($a,$b){
        $kq =$a-$b;
        return $kq;
    }
    function nhan($a,$b){
        $kq =$a*$b;
        return $kq;
    }
    function chia($a,$b){
        $kq =$a/$b;
        return $kq;
    }
    if(isset($_POST['soa']) && isset($_POST['sob'])){
        $a = $_POST['soa'];
        $b = $_POST['sob'];
    }
    if (empty($a)||empty($b)){
        $error.="Vui lòng nhập số a và b !";
    }
    elseif(!is_int($a)&& !is_int($b)){
        $error.="Vui lòng nhập số";
    }
    elseif(isset($_POST['cong'])){
        $result.="a + b = ".cong($a,$b);
    }
    elseif(isset($_POST['tru'])){
        $result.="a - b = ".tru($a,$b);
    }
    elseif(isset($_POST['nhan'])){
        $result.="a * b = ".nhan($a,$b);
    }
    elseif(isset($_POST['chia'])){
        $result.="a / b = ".chia($a,$b);
    }
?>
    <div class="container col-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Thực hành toán tử</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="a">Nhập số a</label>
                        <input type="text" name="soa" id="soa" value="<?php echo $a?>" class="form-control">
                        <label for="b">Nhập số b</label>
                        <input type="text" name="sob" id="sob" value="<?php echo $b?>" class="form-control"><br>
                        <input type="submit" class="btn btn-success" name="cong" value="a + b">
                        <input type="submit" class="btn btn-primary" name="tru" value="a - b">
                        <input type="submit" class="btn btn-danger" name="nhan" value="a * b">
                        <input type="submit" class="btn btn-warning" name="chia" value="a / b">
                    </div>
                    <h3 class="error"><?php echo $error?></h3>
                    <h3 class="result"><?php echo $result?></h3>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
