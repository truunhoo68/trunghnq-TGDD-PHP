
<?php
ob_start();
session_start();
if(!isset($_SESSION['user'])){
    header("location: login.php");
}else{
    $role = $_SESSION['user'][4];
    if($role==2){
        header("location: /Du_an_1/index.php");
    }else{
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
	

<?php
require_once "ketnoi.php";
$id =  $_GET['id'];
$ma_sp =  $_GET['id_sp'];
$sql = "DELETE FROM danh_gia WHERE id = '$id'";
if(mysqli_query($con,$sql)){
echo "<h4 class='alert-danger'>Xóa Thành Công</h4> <br>";
?>
<a class="btn btn-success" href='comment.php?id=<?php echo $ma_sp ?>'>Quay Lại</a>
<?php
}else{
    echo "lỗi";
}
?>
</div>
</body>
</html>