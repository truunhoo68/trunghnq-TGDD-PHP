
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
$ma_sp =  $_GET['id'];
$sql = "DELETE FROM danh_muc WHERE id = '$ma_sp'";
if(mysqli_query($con,$sql)){
    header("location: ql_danh_muc.php");
}else{
    echo "lỗi";
}
?>