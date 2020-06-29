<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 4</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container{margin: 50px auto}
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
    $error='';
    if (isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender='';
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        $state=$_POST['state'];

        if (empty($fname)){
            $error ="Firstname không được để trống";
        }
        elseif (empty($lname)){
            $error ="Lastname không được để trống";
        }
        elseif (empty($gender)){
            $error ="Vui lòng chọn giới tính";
        }

        if (empty($error)){
            $result.="Đăng ký thành công! <br>";
            $result.="Thông tin của bạn: <br>";
            $result.="Firstname: $fname <br>";
            $result.="Lastname: $lname <br>";
            if(!empty($gender)){
                switch ($gender){
                    case 1:
                        $result.="Gender: Male <br>";
                        break;
                    case 2:
                        $result.="Gender: Female <br>";
                        break;
                }
            }
            $result.="State: $state <br>";


        }
    }
?>
<div class="container col-10 row">
    <div class="col-md-9 col-sm-9 col-12">
        <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading text-primary">
                <h3>Registration FORM</h3>
            </div>
            <div class="panel-body">
                <label for="fname">Fistname</label>
                <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname?>">
                <label for="lname">Lastname</label>
                <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname?>">
                <label for="">Gender</label>
                <input type="radio" class="custom-radio" name="gender" id="male" value="1">
                <label for="male">Male</label>
                <input type="radio" class="custom-radio" name="gender" id="female" value="2">
                <label for="female">Female</label><br>
                <label for="state">State</label>
                <select name="state" id="state" class="form-control">
                    <option value="Johor">Johor</option>
                    <option value="VN">VN</option>
                    <option value="TQ">TQ</option>
                    <option value="JAV">JAV</option>
                    <option value="USA">USA</option>
                </select><br>
                <input type="submit" class="btn btn-success" name="submit" id="submit" value="Save Record">
                <input type="reset" class="btn btn-secondary" value="Reset">
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-3 col-sm-3 col-12">
        <div class="panel panel-default">
            <div class="panel-heading text-primary">
                <h3>Exercise List</h3>
            </div>
            <div class="panel-body">
                <button class="btn btn-primary btn-block">Home Direotry</button>
                <button class="btn btn-primary btn-block">FORM</button>
                <button class="btn btn-primary btn-block">Operator</button>
                <button class="btn btn-primary btn-block">Array</button>
                <button class="btn btn-primary btn-block">if-else</button>
                <button class="btn btn-primary btn-block">Repetition</button>
                <button class="btn btn-primary btn-block">String</button>
            </div>
        </div>
    </div>
    <h3 class="error"><?php echo $error?></h3>
    <h3 class="result"><?php echo $result?></h3>
</div>
</body>
</html>