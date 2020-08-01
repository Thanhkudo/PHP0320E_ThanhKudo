<?php
session_start();
require_once 'database.php';
if (!isset($_GET['id'])|| !is_numeric($_GET['id'])){
    $_SESSION['error']="ID  không hợp lệ !";
    header('Location:index.php');
    exit();
}
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
$id=$_GET['id'];
$select= "select * from employees WHERE id=$id";
$query = mysqli_query($conn,$select);
$row = mysqli_fetch_row($query);
$error='';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $des = $_POST['des'];
    $salary = $_POST['salary'];
    //$salary= substr('$sal','0','4');
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    if(empty($name)){
        $error='Vui lòng nhập tên của bạn';
    }

    if (empty($error)){
        $update="UPDATE `employees` SET `name`='$name',`description`='$des',`gender`='$gender',`salary`='$salary',`birthday`='$date' WHERE id=$id";
        $is_update=mysqli_query($conn,$update);
        if ($is_update){
            $_SESSION['success']='Cập nhật thành công!';
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
            <h3>Update Record</h3>
            <hr>
            <p>Please edit input values and submit to update the record</p>
            <label for="name">Name <span style="color: red">*</span></label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['1']?>">
            <label for="name">Description </label>
            <input type="text" name="des" id="des" class="form-control" value="<?php echo $row['2']?>">
            <label for="name">Salary </label>
            <input type="text" name="salary" id="salary" class="form-control" value="<?php echo $row['4']." VNĐ"?>">
            <label>Gender</label><br>
            <?php if ($row['3']==1):?>
                <input type="radio" name="gender" id="male" value="1" class="custom-radio" checked>
                <label for="">Male </label>
                <input type="radio" name="gender" id="female" value="0" class="custom-radio">
                <label for="">Female </label><br>
            <?php else:?>
                <input type="radio" name="gender" id="male" value="1" class="custom-radio" >
                <label for="">Male </label>
                <input type="radio" name="gender" id="female" value="0" class="custom-radio" checked>
                <label for="">Female </label><br>
            <?php endif;?>
            <label for="name">Birthday</label>
            <input type="date" name="date" id="date" class="form-control" value="<?php echo $row['5']?>"><br>
            <input type="submit" name="submit" id="submit" value="Save" class="btn btn-primary">
            <button class="btn btn-light"><a href="index.php">Cancel</a></button>
            <h3 style="color: red"><?php echo $error?></h3>
        </form>
    </div>
</div>
</body>
</html>