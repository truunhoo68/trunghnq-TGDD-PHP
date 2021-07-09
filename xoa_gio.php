<?php
require_once "admin/ketnoi.php";
$id = $_GET['id'];
$sql = "DELETE FROM gio_hang WHERE id = $id";
if(mysqli_query($con,$sql)){
    header("location: giohang.php");
}else{
    echo "lỗi";
}
?>