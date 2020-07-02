<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 5</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .container {
            margin: 100px auto;
            background: #b6e0ff;
            padding: 15px;
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
//echo "<pre>";
//print_r($_FILES);
//echo "<pre>";
$error='';
$result='';
$name='';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];

    if (empty($name)){
        $error="Vui lòng nhập tên của bạn!";
    }
    elseif (empty($pass)){
        $error="Vui lòng nhập mật khẩu!";
    }


    if (empty($error)){
        if($name=='thanhkudo'&&$pass=='123456'){
            $result.="Login Thành công <br>";
        }
        else{
            $error="Sai tên hoặc mật khẩu!";
        }

    }



}
?>


<div class="container col-3 form-group">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">User Name: </label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>"><br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass" class="form-control" ><br>
        <input type="checkbox" name="check" id="check" class="custom-checkbox">
        <label for="check">Remember me</label><br>
        <input type="submit" value="Login" name="submit" class="btn btn-success btn-lg">
    </form>
    <h3 class="error"><?php echo $error ?></h3>
    <h5 class="result"><?php echo $result ?></h5>
</div>
</body>
</html>