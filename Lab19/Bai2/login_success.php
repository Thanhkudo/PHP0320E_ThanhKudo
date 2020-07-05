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
    <title>Bài1</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    header('Location: login.php');
    exit();
}
?>
<div class="container col-3">
    <div class="text-center">
        <h2>Đăng nhập thành công</h2><br>
        <p><strong>Xin chào: </strong> <?php echo $user?></p><br>
        <button class="btn btn-danger" onclick="window.location.href='logout.php'">Logout</button>
        <h3 class="result"><?php echo $result?></h3>
    </div>
</div>
</body>
</html>