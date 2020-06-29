<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 6</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <style>
        .container{
            margin: 100px auto;
            background: #dedede;
            padding-top: 15px;
        }
        h4{
            text-align: center;
        }

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
$name ='';
$email ='';
$url ='';
$phone ='';
$mess ='';
$error='';
$result='';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];
    $mess = $_POST['mess'];

    if(empty($name)){
        $error="Vui lòng nhập tên!";
    }
    elseif(empty($email)){
        $error="Vui lòng nhập Email!";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error="Vui lòng nhập đúng định dạng Email!";
    }
    elseif (empty($phone)){
        $error="Vui lòng nhập SĐT!";
    }
    elseif (!is_numeric($phone)){
        $error="Phone phải là số!";
    }
    elseif (empty($url)){
        $error="Vui lòng nhập URL!";
    }
    elseif(!filter_var($url,FILTER_VALIDATE_URL)){
        $error="Vui lòng nhập đúng định dạng URL!";
    }
    elseif (empty($mess)){
        $error="Vui lòng nhập message!";
    }
    if(empty($error)){
        $result .='Send contact thành công <br>';
        $result .="Your name:  $name <br>";
        $result .="Your email:  $email <br>";
        $result .="Your phone number: $phone <br>";
        $result .="Your Website: $url <br>";
        $result .="Your message: $mess <br>";
    }
}
?>
<div class="container col-4">
    <form action="" method="post">
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name;?>" placeholder="Your name"><br>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>" placeholder="Your Email address"><br>
        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone;?>" placeholder="Your phone number"><br>
        <input type="text" class="form-control" name="url" id="url" value="<?php echo $url;?>" placeholder="Your Web site starts with http://"><br>
        <textarea class="form-control" name="mess" id="mess" rows="3" cols="3" placeholder="Type your Messgage Here..."><?php echo $mess;?></textarea><br>
        <input type="submit" name="submit" id="submit" class=" btn btn-block btn-danger" value="SUBMIT"><br><br>
        <h3 class="error"><?php echo $error?></h3>
        <h3 class="result"><?php echo $result?></h3>
    </form>
</div>
</body>
</html>