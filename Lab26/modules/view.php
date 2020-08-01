<?php
session_start();
require_once 'database.php';
if (!isset($_GET['id'])|| !is_numeric($_GET['id'])){
    $_SESSION['error']="ID  không hợp lệ !";
    header('Location:index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creatr </title>
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        .container{
            margin-top: 100px;
        }
        .btn a{
            text-decoration: none;
            color: #ffffff;
            display: block;

        }
    </style>
</head>
<body>
<?php
$id=$_GET['id'];
$select= "select * from employees WHERE id=$id";
$query = mysqli_query($conn,$select);
//$row = mysqli_fetch_row($query);

?>
<div class="container col-3">
    <div class="form-group">
        <h3>Update Record</h3>
        <hr>
<table>
    <?php while ($row = mysqli_fetch_row($query)):?>
        <tr>
            <th scope="col">ID</th>
        </tr>
        <tr>
            <td><?php echo $row['0']?></td>
        </tr>
        <tr>
            <th scope="col">Name</th>
        </tr>
        <tr>
            <td><?php echo $row['1']?></td>
        </tr>
        <tr>
            <th scope="col">Description</th>
        </tr>
        <tr>
            <td><?php echo $row['2']?></td>
        </tr>
        <tr>
            <th scope="col">Gender</th>
        </tr>
        <tr>
            <?php if($row['3']==1):?>
            <td>Male</td>
            <?php else:?>
            <td>Female</td>
            <?php endif;?>
        </tr>
        <tr>
            <th scope="col">Salary</th>
        </tr>
        <tr>
            <td><?php echo $row['4']?></td>
        </tr>
        <tr>
            <th scope="col">Birthday</th>
        </tr>
        <tr>
            <td><?php echo $row['5']?></td>
        </tr>
        <tr>
            <th scope="col">Created_at</th>
        </tr>
        <tr>
            <td><?php echo $row['6']?></td>
        </tr>
    <?php endwhile; ?>

</table>
        <br>
        <button class="btn btn-primary"><a href="index.php">Back</a></button>
    </div>
</div>
</body>
</html>