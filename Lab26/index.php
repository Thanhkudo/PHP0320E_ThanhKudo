<?php
session_start();
require_once 'database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .container{
            margin-top: 100px;
        }
        .text-right a{
            text-decoration: none;
            color: #ffffff;
            display: block;
        }
        i{
            font-size: 20px;
            margin-right: 5px;
        }
        table{
            width: 100%;
        }
    </style>

</head>
<body>
<?php
if (isset($_SESSION['success'])):?>
    <script type='text/javascript'>
    alert("<?php echo $_SESSION['success']?>");
    <?php unset($_SESSION['success']);?>
    </script>";
}
<?php endif;?>


<?php
if (isset($_SESSION['error'])):?>
<script type='text/javascript'>
    alert("<?php echo $_SESSION['error']?>");
    <?php unset($_SESSION['error']);?>
</script>";
}
<?php endif;?>



<div class="container col-10">
    <div class="row">
        <div class="col">
            <h3>Employees List</h3>
        </div>
        <div class="col text-right">
            <button class="btn btn-success"><a href="create.php">+ ADD New Employees</a></button>
        </div>
    </div>
    <br>
    <table class="table" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Gender</th>
            <th scope="col">Salary</th>
            <th scope="col">Birthday</th>
            <th scope="col">Created_at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

            <?php
            $select= "select * from employees";
            $query = mysqli_query($conn,$select);
            //$row = mysqli_fetch_row($query);

            //foreach ($row AS $key){
            while ($row = mysqli_fetch_row($query))
            {
                echo"<tr>";
                echo "<td>".$row['0']."</td>";
                echo "<td>".$row['1']."</td>";
                echo "<td>".$row['2']."</td>";
                if ($row['3']==1) {
                    echo "<td>Male</td>";
                }
                else{
                    echo "<td>Female</td>";
                }
                echo "<td >".$row['4']." VNĐ</td>";
                echo "<td>".$row['5']."</td>";
                echo "<td>".$row['6']."</td>";
                ?>
                <td>
                    <a href="view.php?id=<?php echo $row['0']?>"><i class="far fa-eye"></i></a>
                    <a href="update.php?id=<?php echo $row['0']?>"><i class="fas fa-pencil-alt"></i></a>
                    <a href="delete.php?id=<?php echo $row['0']?>" onclick="return confirm('Bạn chắc chắn muốn xóa !')"><i class="far fa-trash-alt"></i></a>
                </td>
                </tr>
            <?php
            }
            ?>
    </table>

</div>
</body>
</html>