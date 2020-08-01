<?php
session_start();
require_once 'configs/database.php';
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
    <title>View </title>
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
$select= $conn->prepare("select * from employees WHERE id=$id");
$select->execute();

//$row = mysqli_fetch_row($query);

?>
<div class="container col-3">
    <div class="form-group">
        <h3>Update Record</h3>
        <hr>
<table>
    <?php while ($is_select=$select->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <th scope="col">ID</th>
        </tr>
        <tr>
            <td><?php echo $is_select['id']?></td>
        </tr>
        <tr>
            <th scope="col">Name</th>
        </tr>
        <tr>
            <td><?php echo $is_select['name']?></td>
        </tr>
        <tr>
            <th scope="col">Description</th>
        </tr>
        <tr>
            <td><?php echo $is_select['description']?></td>
        </tr>
        <tr>
            <th scope="col">Gender</th>
        </tr>
        <tr>
            <?php if($is_select['gender']==1):?>
            <td>Male</td>
            <?php else:?>
            <td>Female</td>
            <?php endif;?>
        </tr>
        <tr>
            <th scope="col">Salary</th>
        </tr>
        <tr>
            <td><?php echo $is_select['salary']?></td>
        </tr>
        <tr>
            <th scope="col">Birthday</th>
        </tr>
        <tr>
            <td><?php echo $is_select['birthday']?></td>
        </tr>
        <tr>
            <th scope="col">Created_at</th>
        </tr>
        <tr>
            <td><?php echo $is_select['created_at']?></td>
        </tr>
    <?php endwhile; ?>

</table>
        <br>
        <button class="btn btn-primary"><a href="index.php">Back</a></button>
    </div>
</div>
</body>
</html>