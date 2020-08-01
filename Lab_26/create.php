<?php
session_start();
require_once 'configs/database.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creatr </title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        .container{
            margin-top: 100px;
        }
        .btn-light a{
            text-decoration: none;
            color: #000000;
            display: block;
        }
    </style>
</head>
<body>
<?php
$error='';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $des = $_POST['des'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    if(empty($name)){
        $error='Vui lòng nhập tên của bạn';
    }

    if (empty($error)){
        $create=$conn->prepare("INSERT INTO employees(`name`,`description`,`gender`,`salary`,`birthday`)VALUES(:name,:des, :gender, :salary, :date)");
        $arr_create=[
          ':name'=>$name,
          ':des'=>$des,
          ':gender'=>$gender,
          ':salary'=>$salary,
          ':date'=>$date
        ];
        $is_create = $create->execute($arr_create);

        if ($is_create){
            $_SESSION['success']='Thêm nhân viên thành công!';
            header('Location:index.php');
            exit();
        }
        else{
            $error='Lỗi kết lối!';
        }
    }
}
?>
<div class="container col-4">
    <div class="form-group">
        <form action="" method="post">
            <h3>Create Record</h3>
            <hr>
            <label for="name">Name <span style="color: red">*</span></label>
            <input type="text" name="name" id="name" class="form-control" value="">
            <label for="name">Description </label>
            <input type="text" name="des" id="des" class="form-control" value="">
            <label for="name">Salary </label>
            <input type="text" name="salary" id="salary" class="form-control" value="">
            <label>Gender</label><br>
            <input type="radio" name="gender" id="male" value="1" class="custom-radio" checked>
            <label for="">Male </label>
            <input type="radio" name="gender" id="female" value="0" class="custom-radio">
            <label for="">Female </label><br>
            <label for="name">Birthday</label>
            <input type="date" name="date" id="date" class="form-control" value=""><br>
            <input type="submit" name="submit" id="submit" value="Save" class="btn btn-primary">
            <button class="btn btn-light"><a href="index.php">Cancel</a></button>
            <h3 style="color: red"><?php echo $error?></h3>
        </form>
    </div>
</div>
</body>
</html>