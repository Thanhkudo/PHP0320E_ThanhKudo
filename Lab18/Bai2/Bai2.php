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
//echo "<pre>";
//print_r($_FILES);
//echo "<pre>";
$error='';
$result='';
$name='';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_tmp_name=$_FILES['file']['tmp_name'];
    $file_error=$_FILES['file']['error'];
    $file_size=$_FILES['file']['size'];

    if (empty($name)){
        $error="Vui lòng nhập tên của bạn!";
    }
    elseif ($file_error==4){
        $error="Chưa chọn file à nha !";
    }
    if($file_error==0) {
        $duoi_file = pathinfo($file_name, PATHINFO_EXTENSION);
        $duoi_file = strtolower($duoi_file);
        $duoi_file_all = ['jpg', 'jpeg', 'png', 'gif'];
        $file_size_mb = round($file_size / 1024 / 1024, 2);

        if (!in_array($duoi_file,$duoi_file_all)){
            $error="Cần upload file có định dạng ảnh!";
        }
        elseif ($file_size_mb>2){
            $error="File upload không được > 2Mb !";
        }
    }
    if (empty($error)){
        if ($file_error==0){
            $folder_tmp=__DIR__.'/Upload/';
            if(!file_exists($folder_tmp)){
                mkdir($folder_tmp);
            }

            $file_name=time().'_'.$file_name;
            $move_folder=move_uploaded_file($file_tmp_name,$folder_tmp.'/'.$file_name);
            if($move_folder=true){
                $result.="Tên của bạn: $name <br>";
                $result.="Avatar của bạn: <img src='Upload/$file_name' height='100px'> <br>";
                $result.="Tên file: $file_name <br>";
                $result.="Định dạng file: $duoi_file <br>";
                $result.="Đường dẫn file trên project của bạn: $folder_tmp $file_name <br>";
                $result.="Kích thước file: $file_size_mb";
            }
        }
    }

}
?>


<div class="container col-4 form-group">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Họ và tên: </label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>" placeholder="Tên của bạn ..."><br>
        <input type="file" name="file" id="file" class="custom-file" ><br><br>
        <input type="submit" value="Show info" name="submit" class="btn btn-primary btn-lg">
    </form>
    <h3 class="error"><?php echo $error ?></h3>
    <h5 class="result"><?php echo $result ?></h5>
</div>
</body>
</html>