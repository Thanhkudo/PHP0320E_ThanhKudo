<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <style type="text/css">
        .frame{

            width: 40%;
            margin: 100px auto;
            background: #dbdbdb;
        }
        .frame-form{
            padding: 20px
        }
    </style>
</head>
<body>
<?php
    $name="Đỗ Như Thanh";
    $age="22";
    $country="Phú Lương, Hà Đông - Hà Nội";
?>
    <div class="container">
        <div class="frame">
            <form action="" id="form" class="form-group" method="post">
                <div class="frame-form">
                    <h2>FORM căn bản</h2>
                    <label for="name">Họ tên</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
                    <br>
                    <label for="age">Tuổi</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age;?>">
                    <br>
                    <label for="country">Quê quán</label>
                    <textarea name="country" class="form-control" id="country" cols="30" rows="5"><?php echo $country;?></textarea>
                    <br>
                    <label for="file">Ảnh đại diện</label>
                    <input type="file" name="file" id="file" class="form-control" value="">
                    <br>
                    <input type="submit" value="Submit" class="btn btn-success btn-block">
                </div>
            </form>
        </div>
    </div>

</body>
</html>