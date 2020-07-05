<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai 3</title>
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
        .form-group{padding: 20px 80px}
    </style>
</head>
<body>
<?php
$error='';
$result='';
if (isset($_SESSION['error'])){
    $error=$_SESSION['error'];
    unset($_SESSION['error']);
}
if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
    $_SESSION['user']=$_COOKIE['user'];
    $_SESSION['result']='Chào mừng bạn quay trở lại!';
    header('Location: login_success.php');
    exit();
}
if (isset($_SESSION['logout'])){
    $result=$_SESSION['logout'];
    unset($_SESSION['logout']);
}
if (isset($_SESSION['user'])){
    $_SESSION['result']='Bạn đã đăng nhập rồi!';
    header('Location:login_success.php');
    exit();
}
if (isset($_POST['submit'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if (empty($user)|| empty($pass)){
        $error='Vui lòng nhập Username và Password!';
    }
    elseif (strlen($pass)<5){
        $error='Password ít nhất 5 ký tự!';
    }

    if (empty($error)){
        if ($user=='admin' && $pass=='123456'){
            if (isset($_POST['save'])){
                setcookie('user',$user, time()+120);
                setcookie('pass',$pass, time()+120);
            }
            $_SESSION['user']=$user;
            header('Location: login_success.php');
            exit();
        }
        else{
            $error='Sai Username hoặc Password!';
        }
    }
}

?>
<div class="container col-3">
    <div class="form-group">
        <form action="" method="post" >

            <label for="user">Username: </label>
            <input type="text" name="user" id="user" class="form-control" value=""><br>
            <label for="pass">Password: </label>
            <input type="password" name="pass" id="pass" class="form-control" value=""><br>
            <input type="checkbox" value="1" style="width: 15px; height: 15px" name="save" id="save" class="custom-checkbox">
            <label for="save"> Remember my account</label>
            <input type="submit" class="btn btn-success btn-block" value="LOGIN" name="submit"><br>
            <p class="error"><?php echo $error;?></p>
            <p class="result"><?php echo $result;?></p>
        </form>
    </div>
</div>
</body>
</html>