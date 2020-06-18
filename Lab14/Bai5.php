<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .frame{
            padding-top: 50px;
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
    $name="Đỗ Như Thanh";
    $email="thanhkudo1o11998@gmail.com";
    $phone="0355820911";
    $mess="This is a message";
?>
    <div class="container">
        <div class="frame">
            <form action="" method="post" id="form">
                <div class="form-group">
                    <div class="row">
                        <div class="col col-md-4 col-sm-4 col-12">
                            <label for="name">Name <span>*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name?>">
                        </div>
                        <div class="col col-md-4 col-sm-4 col-12">
                            <label for="email">Email <span>*</span></label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email?>">
                        </div>
                        <div class="col col-md-4 col-sm-4 col-12">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone?>">
                        </div>
                    </div>
                    <br>
                    <label for="txt">Message <span>*</span></label>
                    <textarea class="form-control col-sm-12 col-md-12 col-12" id="txt" name="txt"><?php echo $mess?></textarea>
                    <br>
                    <input type="submit"  class="btn btn-warning" value="Send Message"><br><br>
                    <h4 id="content"></h4>
                </div>
            </form>
        </div>
    </div>
<script type="text/javascript">
    var frm = document.getElementById('form');
    console.log(frm);
    frm.addEventListener('submit', function () {
        var name = document.getElementById('name').value;
        var email= document.getElementById("email").value;
        var phone = document.getElementById('phone').value;
        var txt = document.getElementById('txt').value;

        var content='';

        content += "Name: "+name+"<br>";
        content += "Email: "+email+"<br>";;
        content += "Phone: "+phone+"<br>";
        content += "Message: "+txt+"<br>";

        document.getElementById('content').innerHTML=content;
        event.preventDefault();
    })
</script>

</body>
</html>