
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
?><?php
require_once "ketnoi.php";
$id =  $_GET['id'];
$sql = "DELETE FROM admin WHERE id = '$id'";
if(mysqli_query($con,$sql)){
    header("location: qt_user.php");
}else{
    echo "lỗi";
}
?>