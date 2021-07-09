<?php
session_start();
require "admin/ketnoi.php";
$id_sp = $_GET['id_sp'];
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'][1];
    }
$sql = "SELECT * FROM san_pham WHERE id = $id_sp";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $tensp = $row['ten_sp'];
        $anh = $row['anh_sp'];
        $gia = $row['gia_sp'];
 
    }
}
$sql = "SELECT * FROM gio_hang WHERE id_user = '$user' AND id_sp = $id_sp";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
       $id = $row['id_sp'];
       $so_luong = $row['so_luong'];
    }
}
if(!empty($id)){
    $sql = "UPDATE gio_hang SET so_luong = so_luong+1 WHERE id_sp = $id_sp ";
    if (mysqli_query($con, $sql)) {
        header("location: giohang.php");
    } else {
        echo "Bạn chưa đăng nhập";
    }
}else {
    $sql = "INSERT INTO gio_hang (ten_sp,`anh_sp`,gia_sp,id_sp,id_user,so_luong) VALUES('$tensp','$anh',$gia,$id_sp,'$user',1)";
    if(mysqli_query($con,$sql)){
        header("location: giohang.php");
    }else{
        echo "Bạn chưa đăng nhập";
    }
}

?>