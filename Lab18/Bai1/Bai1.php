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
    if (isset($_POST['submit'])){
        $file_name=$_FILES['file']['name'];
        $file_tmp_name=$_FILES['file']['tmp_name'];
        $file_error=$_FILES['file']['error'];
        $file_size=$_FILES['file']['size']; // o dang byte

    //validate theo file_error
        if (empty($file_name)){
            $error ="Bạn chưa chọn File!";
        }
        elseif ($file_error==0){
            //lay duoi file
            $duoi_file = pathinfo($file_name,PATHINFO_EXTENSION);
            //doi duoi file thanh chu thuong
            $duoi_file=strtolower($duoi_file);
            $duoi_file_all=['jpg','jbeg','png','gif'];
            //doi byte sang Mb và lam tron
            $file_size_mb=round($file_size/1024/1024,2);

            //check duoi file
            if (!in_array($duoi_file,$duoi_file_all)){
                $error ="Vui lòng chọn ảnh!";
            }
            elseif ($file_size_mb>1){
                $error ="Vui lòng chọn ảnh có kích thước bé hơn 1 Mb!";
            }
        }
        //submit
        if (empty($error)){
            if ($file_error==0){
                //tao thu muc lưu file
                $file_upload = __DIR__.'/Uploads/';
                //kiểm tra thư muc ton tại hay chua ms đc tạo
                if (!file_exists($file_upload)){
                    mkdir($file_upload);
                }
                //check lai ten tranh ten trung lap
                $file_name=time().'_'.$file_name;
                //update vao thu muc vua tao: $file_update;
                $is_update=move_uploaded_file($file_tmp_name,$file_upload.'/'.$file_name);
                if ($is_update=true){
                    $result.="Ảnh vừa Upload: <img src='Uploads/$file_name' height='100'/><br>";
                    $result.="Tên file: $file_name <br>";
                    $result.="Định dạng file: $duoi_file <br>";
                }
            }


        }
    }
?>
<div class="container col-4">
    <form action="" method="post" enctype="multipart/form-data">
        <p>Select a file to upload</p>
        <input type="file" name="file" id="">
        <p>Only jpg, jpeg, png and gif file with maximum size of 1Mb is allowed</p>
        <input type="submit" value="Upload" name="submit" class="btn btn-primary btn-lg">
    </form>
    <h3 class="error"><?php echo $error ?></h3>
    <h3 class="result"><?php echo $result ?></h3>
</div>
</body>
</html>