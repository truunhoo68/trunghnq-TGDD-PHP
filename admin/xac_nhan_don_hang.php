<?php
require_once "ketnoi.php";
$id = $_GET['id'];
$sql = "UPDATE don_hang SET trang_thai = 'Đã xác nhận' WHERE id = $id";
if(mysqli_query($con,$sql)){
    header("location: qt_don_hang.php");
}else{
    echo  "lỗi";
}
?>