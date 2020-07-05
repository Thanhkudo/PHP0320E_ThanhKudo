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
    <title>Bài 3</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/time.js"></script>
    <style>
        .container {
            margin: 100px auto;
            background: #e2e2e2;
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
$result='';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if (isset($_SESSION['result'])) {
        $result = $_SESSION['result'];
        unset($_SESSION['result']);
    }
}
else{
    $_SESSION['error']="Cần đăng nhập để truy cập!";
    header('Location: index.php');
    exit();
}
?>
<div class="container col-3">
    <div class="text-center">
        <br><h2>Đăng nhập thành công</h2><br>
        <p>Chào mừng bạn: <strong> <?php echo $user?></strong></p>
        <p>Thời gian hiện tại đang login: </p>
        <p id="vnclock">
<!--            --><?php
//                date_default_timezone_set('Asia/Ho_Chi_Minh');
//                echo date('d/m/Y H:i:s A', time());
//            ?>
        </p>
        <br>
        <button class="btn btn-danger" onclick="window.location.href='logout.php'">Logout</button>
        <p class="result"><?php echo $result?></p>
    </div>
</div>
</body>
</html>