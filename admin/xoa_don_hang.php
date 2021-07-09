<?php
require_once "ketnoi.php";
$id = $_GET['id'];
$sql = "DELETE  FROM don_hang where id = $id ";
if(mysqli_query($con,$sql)){
    header("location: qt_don_hang.php");
}else{
    echo "lỗi";
}
?>
