<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 2</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <style>
        .container{
            margin: 100px auto;
        }
        table{margin: auto; width: 100%}
        table td {
            padding: 10px;
            background: #55dbdb;
        }
        table th{
            background: #3fb5db;
            text-align: center;
            padding: 10px;
            color: #fff;
        }
        input[type='radio']{
            width: 15px;
            height: 15px;
        }
        .fff{
            color: #fff;
            text-align: right;
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
    $resulr='';
    if(isset($_POST['submit'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $type=$_POST['type'];
        $name=$_POST['name'];
        $add=$_POST['add'];
        $email=$_POST['email'];
        $gender='';
        $check='';
        if(isset($_POST['gender'])){
            $gender =$_POST['gender'];
        }
        if(isset($_POST['check'])){
            $check =$_POST['check'];
        }
        if(empty($user)){
            $error="Vui lòng nhập Username!";
        }
        elseif (empty($pass)){
            $error="Vui lòng nhập Password!";
        }
        elseif ($type==0){
            $error="Vui lòng chọn User Type!";
        }
        elseif (empty($name)){
            $error="Vui lòng nhập Display Name!";
        }
        elseif (strlen($name)>24){
            $error="Display Name tối đa 24 ký tự!";
        }
        elseif (empty($add)){
            $error="Vui lòng nhập Address!";
        }
        elseif (empty($email)){
            $error="Vui lòng nhập Email!";
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error="Vui lòng nhập đúng định dạng Email !";
        }
        elseif (empty($gender)){
            $error="Vui lòng chọn giới tính!";
        }
        elseif (empty($check)){
            $error="Bạn có chấp nhận các điều khoản!";
        }

        if(empty($error)){
            $resulr.="Username: $user <br>";
            $resulr.="Password: $pass <br>";
            switch ($type){
                case 1:
                    $resulr.="User Type: Admin <br>";
                    break;
                case 2:
                    $resulr.="User Type: Member <br>";

            }
            $resulr.="Display Name: $name <br>";
            $resulr.="Address: $add <br>";
            $resulr.="Email: $email <br>";
            if(!empty($gender)){
                switch ($gender){
                    case 0:
                        $resulr.="Gender: Female <br>";
                        break;
                    case 1:
                        $resulr.="Gender: Male <br>";
                        break;
                }
            }
        }

    }
?>
    <div class="container col-4">
        <form action="" method="post" class="form-group">
            <table border="1px">
                <tr>
                    <th colspan="2"><h4>Tutorials Point Absolute classes resgistration</h4></th>
                </tr>
                <tr>
                    <td class="fff">
                        <label for="user">Username: </label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="user" id="user" value="<?php echo $user?>">
                    </td>
                </tr>

                <tr>
                    <td class="fff">
                        <label for="pass">Password: </label>
                    </td>
                    <td>
                        <input type="password" class="form-control" name="pass" id="pass" value="<?php echo $pass?>">
                    </td>
                </tr>

                <tr>
                    <td class="fff">
                        <label for="type">User Type: </label>
                    </td>
                    <td>
                        <select name="type" id="type" class="custom-select" >
                            <option  value="0">--Select--</option>
                            <option value="1">Admin</option>
                            <option value="2">Menber</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="fff">
                        <label for="name">Display Name: </label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name?>">
                    </td>
                </tr>

                <tr>
                    <td class="fff">
                        <label for="add">Address: </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="add" name="add" rows="3"><?php echo $add?></textarea>
                    </td>
                </tr>

                <tr>
                    <td class="fff">
                        <label for="email">Email: </label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $email?>">
                    </td>
                </tr>

                <tr>
                    <td class="fff">
                        <label>Gender: </label>
                    </td>
                    <td>
                        <input type="radio" class="custom-radio" name="gender" id="female" value="0">
                        <label for="female"> Female</label>
                        <input type="radio" class="custom-radio" name="gender" id="male" value="1">
                        <label for="male"> Male</label>
                    </td>
                </tr>

                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="checkbox" class="custom-checkbox" name="check" id="check" value="1">
                        <label for="check"> I accept Terms and Conditions</label>
                    </td>
                </tr>

                <tr>
                    <th colspan="2">
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
                    </th>
                </tr>
            </table>
            <h3 class="error"><?php echo $error?></h3>
            <h3 class="result"><?php echo $resulr?></h3>
        </form>
    </div>
</body>
</html>