<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 1</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <style>
        .container{
            margin: 100px auto;
        }
        h4{
            text-align: center;
        }
        .col-form-label{font-size: 20px}
        input[type='radio']{
            width: 20px;
            height: 20px;
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
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $details = $_POST['details'];
    $gt='';
    if(isset($_POST['gender'])){
        $gender =$_POST['gender'];
    }
    if(empty($name)){
        $error="Vui lòng nhập tên!";
    }
    elseif(empty($email)){
        $error="Vui lòng nhập Email!";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error="Vui lòng nhập đúng định dạng Email!";
    }
    elseif (empty($time)){
        $error="Time không được để trống!";
    }
    elseif (empty($details)){
        $error="Vui lòng nhập chú thích!";
    }
    elseif (empty($gender)){
        $error="Vui lòng chọn giới tính!";
    }
    if(empty($error)){
        $result .="Name: $name <br>";
        $result .="Email: $email <br>";
        $result .="Specific Time: $time <br>";
        $result .="Class Details: $details <br>";
        if(!empty($gender)){
            switch ($gender){
                case 0:
                    $result .="Gender: Female <br>";
                    break;
                case 1:
                    $result .="Gender: Male <br>";
                    break;
            }
        }

    }
}
?>
<div class="container col-4">
    <form action="" method="post">
        <h4>Tutorials Point Absolute classes resgistration</h4><br>
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label">Name: </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email: </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $email?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="time" class="col-sm-4 col-form-label">Specific time: </label>
            <div class="col-sm-8">
                <input type="date" class="form-control" name="time" id="time" value="<?php echo $time?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="details" class="col-sm-4 col-form-label">Class details: </label>
            <div class="col-sm-8">
                <textarea class="form-control" name="details" id="details" rows="3"><?php echo $details?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="gender" class="col-sm-4 col-form-label">Gender: </label>
            <div class="col-sm-8" style="font-size: 20px">
                <input type="radio" class="custom-radio" name="gender" id="female" value="0">
                <label for="female"> Female</label>
                <input type="radio" class="custom-radio" name="gender" id="male" value="1">
                <label for="male"> Male</label>
            </div>
        </div>

        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Show info"><br><br>
        <h3 class="result">Your given details are as:</h3>
        <h3 class="error"><?php echo $error?></h3>
        <h3 class="result"><?php echo $result?></h3>
    </form>
</div>
</body>
</html>