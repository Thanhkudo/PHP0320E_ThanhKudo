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
    <style>
        .container {
            margin: 100px auto;
            background: #e2e2e2;
            padding: 15px;
        }
        .frame{
            margin: 50px auto;
        }
        img{
            height: 100px;
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
$email='';
$pass='';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_tmp_name=$_FILES['file']['tmp_name'];
    $file_error=$_FILES['file']['error'];
    $file_size=$_FILES['file']['size'];

    if(empty($name)){
        $error='Username không được để trống !';
    }
    elseif (empty($email)){
        $error='Email không được để trống !';
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error='Vui lòng nhập đúng định dạng Email!';
    }
    elseif (empty($pass)){
        $error='Password không được để trống !';
    }
    elseif (empty($pass1)){
        $error='Confirm password không được để trống !';
    }
    elseif ($pass!=$pass1){
        $error='Password không trùng khớp!';
    }elseif (empty($file_name)){
        $error='Chưa chọn Avatar nha!';
    }
    elseif ($file_error==0){
        $duoi_file=pathinfo($file_name,PATHINFO_EXTENSION);
        $duoi_file=strtolower($duoi_file);
        $duoi_file_all=['jpg','png','jpeg','gif'];
        if(!in_array($duoi_file,$duoi_file_all)){
            $error='Cần upload ảnh!';
        }
    }
    if(empty($error)){
        if ($file_error==0){
            $folder_tmp=__DIR__.'/Upload/';
            if(!file_exists($folder_tmp)){
                mkdir($folder_tmp);
            }
            $file_name=time().'_'.$file_name;
            $move_folder=move_uploaded_file($file_tmp_name,$folder_tmp.'/'.$file_name);
            if ($move_folder=true){
                $result.="Username: $name <br>";
                $result.="Email: $email <br>";
                $result.="Avatar: <img src='Upload/$file_name'>";
            }
        }
    }
}
?>


<div class="container col-6 ">
    <div class="frame col-8 form-group">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Create an account</h1>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>" placeholder="User Name"><br>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>" placeholder="Email"><br>
            <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $pass ?>" placeholder="Password"><br>
            <input type="password" name="pass1" id="pass1" class="form-control" value="" placeholder="Confirm Password"><br>
            <label for="file">Select your avatar: </label><input type="file" name="file" id="file" ><br>
            <input type="submit" value="Show info" name="submit" class="btn btn-primary btn-lg">
        </form>
        <h3 class="error"><?php echo $error ?></h3>
        <h5 class="result"><?php echo $result ?></h5>
    </div>
</div>
</body>
</html>