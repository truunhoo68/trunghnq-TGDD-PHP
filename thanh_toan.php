<?php
session_start();
if( !isset($_SESSION['user'])){
    header("location: admin/login.php ");
}
    if(empty($_GET['id_sp'])){
        echo  "";
    }else{
        $id_sp = $_GET['id_sp'];
    }
if(isset($_POST['sm_sl'])){
    require_once "admin/ketnoi.php";
    $sl = $_POST['sl'];
    require_once "admin/ketnoi.php";
    $sql = "SELECT * FROM gio_hang WHERE id_sp = $id_sp ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
        while($num = mysqli_fetch_assoc($result)){
           $gia = $num['gia_sp'];
        }
    }

    if($sl<1){
        ?>
        <script> alert("Số lượng phải lớn hơn 0 !")</script>
        <?php
    }else{
    $sql = "UPDATE gio_hang SET so_luong = $sl, tong_tien = $sl*$gia WHERE id_sp = $id_sp";
    if(mysqli_query($con,$sql)){
        ?> <script>
            alert("Cập nhật thành công");
        </script> <?php
    }else{
        ?>
        <script>
            alert("Lỗi");
        </script>

        <?php
    }
}
    }
if(isset($_POST['sm'])) {
    $tb = "";
    $dia_chi = $_POST['dia_chi'];
    $sdt = $_POST['sdt'];
    $ngay_mua = date('Y/m/d H:i:s');
    $trang_thai = "Chờ Xác nhận";
    $ten_kh =  $_SESSION['user'][3];
    $sl = $_POST['sl'];
    if (strlen($dia_chi) == null || strlen($sdt) == null) {
        ?>
        <script>
            alert("Bạn chưa nhập đủ thông tin");
        </script>
<?php
    } else {
        if (strlen($sdt) != 10 & strlen($sdt) != 11) {
            ?>
            <script>
                alert("Số điện thoại gồm 10 hoặc 11 số !");
            </script>
            <?php
        }else{
            require_once "admin/ketnoi.php";
            $sql = "SELECT * FROM san_pham WHERE id = $id_sp ";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)){
                while($num = mysqli_fetch_assoc($result)){
                    $ten_sp = $num['ten_sp'];
                    $loai_sp = $num['loai_sp'];
                    $anh_sp = $num['anh_sp'];
                }
            }
            $sql = "SELECT * FROM gio_hang WHERE id_sp = $id_sp ";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)){
                while($num = mysqli_fetch_assoc($result)){
                    $so_luong = $num['so_luong'];
                    $tong_tien = $num['tong_tien'];
                }
            }
            $sql = "INSERT INTO don_hang (ten_sp,ten_kh,so_luong,tong_tien,loai_sp,ngay_mua,trang_thai,anh_sp,dia_chi,sdt)VALUES('$ten_sp','$ten_kh',$sl,$tong_tien,'$loai_sp','$ngay_mua','$trang_thai','$anh_sp','$dia_chi',$sdt)";
            if(mysqli_query($con,$sql)){
                ?>
                <script>alert("Đặt hàng thành công !")</script>

                <?php
                header("location: thanh_toan_2.php");
            }else{
                ?>
                <script>alert("Lỗi !!!!")</script>

                <?php
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Computer Store</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    <link rel="stylesheet" href="custom.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style type="text/css" media="screen">

    .hover-box *, .hover-box *:before, .hover-box *:after {
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
    }
    .hover-box:before {
        position: absolute;
        top: 2px;
        bottom: 2px;
        left: 2px;
        right: 2px;
        content: '';
        background-color: #232323;
        opacity: 0;
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
    }
    .hover-box .icons {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hover-box a {
        opacity: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    .hover-box a i {
        font-size: 23px;
        line-height: 40px;
        width: 40px;
        background-color: #fff;
        color: #EB4960;
        border-radius: 5px;
    }
    .hover-box a i:hover {
        background-color: #EB4960;
        color: #fff;
        cursor: pointer;
    }
    .hover-box:hover:before, .hover-box:hover:before {
        opacity: 0.2;
    }
    .hover-box:hover a, .hover-box:hover a {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    .danhmuc{
        color: black;
    }
    .danhmuc:hover{
        transition: 1s;
        color: white;
    }
    nav > div a.nav-item.nav-link,
    nav > div a.nav-item.nav-link.actives
    {
        border: none;
        padding: 18px 25px;
        color:black;
        font-size: 18px;
        font-family: tahoma;
        background: #f3f3f3;
        border-radius:0;
    }
    nav > div a.nav-item.nav-link:hover,
    nav > div a.nav-item.nav-link:focus
    {

        background: -webkit-gradient(linear,left top,left bottom,from(#E6F1FD),to(white)); ;
        color:red;
        border-radius:0;
        transition:background 0.20s linear;
    }
    .footer1 {
        height: 150px;
        width: 25%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footer1>.div1>a>span {
        display: block;
    }

    .footer2 {
        margin-top: 10px;
        height: 200px;
        width: 25%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footer2>.div2>a>span {
        display: block;
    }

    .footer3 {
        margin-top: 10px;
        height: 150px;
        width: 25%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footer3>.div3>a>span {
        display: block;
    }

    .footer4 {
        height: 150px;
        width: 25%;
    }
    .footer {
        margin-top: 20px;
        background-color: #F5F5F5;
        width: 100%;
        height: 250px;
        display: flex;
    }
    .danhmuc{
        display: flex !important;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
<div class="container-fluid sticky-top"style="background: -webkit-gradient(linear,left top,left bottom,from(#f53d2d),to(#f63));" >
    <div class="row" >
        <ul class="navbar nav  ml-auto ">
            <?php if(isset($_SESSION['user'])){
                echo "<b style='color:#56f913;font-size:17px;margin-right:5px;'>" .$_SESSION['user'][3]."</b>"." | "."<a style='margin-left:5px;color:white;' href='/Du_an_1/admin/logout.php'> Đăng xuất</a>" ;
            }else{
                echo "
        <li class='nav-item'>
        <a href='admin/login.php'  class=' lg nav-link' title='' style='color: white;border-right: 1px solid white'>Đăng Nhập</a>
      </li>
      <li class='nav-item'>
        <a href='admin/dk.php' class=' lg nav-link' title='' style='color: white'>Đăng Kí</a>
      </li>
        ";
            }

            ?>
            <li class="nav-item">
                <a href="admin/index.php" class=" lg nav-link" title="" style="color: white;text-dection">| Quản trị</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="navbar-brand" style="position: absolute;top: 20px; left: 40px"><a href="index.php"><img src="img/logo.png" width="130" height="60"  alt="logo................."></a></div>
        <div class="input-group" style="height: 25px;width: 780px;margin-left: 250px">
            <input type="text" class="form-control" placeholder="Nhập tìm kiếm . . ." >
            <div class="input-group-append">
                <input  type="button" name="" class="btn btn-danger " value="Search"   style="height: 38px" type="button">
            </div>
        </div>
        <div class="navbar-brand" style=" margin-left: 50px; margin-bottom: 5px "> <a href="giohang.php" title=""><img src="img/cart.png" width="40" height="35" alt=""> </a>
            <?php
            require_once 'admin/ketnoi.php';
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'][1];
                $sql = "SELECT * FROM gio_hang where id_user = '$user'";
                $i=0;
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result)){
                    while($num = mysqli_fetch_assoc($result)){
                        $i++;
                    }
                }
                ?>
                <span style="font-size: 13px;"><?php echo '<b style="color:white;">' .$i .  ' sản phẩm </b>'; ?></span>
                <?php
            }
            else{
                echo "<span style='font-size: 13px;color:white;'><?php echo '<b style='color:white;'> Bạn chưa đăng nhập</b></span>";

            }

            ?>

        </div>
    </div>
</div>
<div class="container">
<form method="post">
    <table class="data-table table nowrap" style="width: 500px;margin-top: 100px;margin-bottom: 100px">
        <?php
        require_once "admin/ketnoi.php";
        if(isset($id_sp)) {
            $sql = "SELECT * FROM san_pham WHERE id = $id_sp";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)) {
            }
            while ($num = mysqli_fetch_assoc($result)) {
                $ten_sp = $num['ten_sp'];
                $gia = $num['gia_sp'];
                $anh = $num['anh_sp'];
            }
            $sql = "SELECT * FROM gio_hang WHERE id_sp = $id_sp";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)) {
            }
            while ($num = mysqli_fetch_assoc($result)) {
                $sl = $num['so_luong'];
            }
        ?>
            <tr >
                <td class="table-plus"> Tên sản phẩm: </td>
                <td class="table-plus"> <b><?php echo  $ten_sp ?></b> </td>

            </tr>
            <tr>
                <td class="table-plus"> Ảnh sản phẩm: </td>
                <td class="table-plus"> <b><img src="admin/img/<?php echo  $anh ?>" width="200" height="200"></b>  </td>
            </tr>
            <tr>
                <td class="table-plus" > Giá: </td>
                <td class="table-plus"> <b><?php echo  number_format($gia) ?> <span style="color: red">vnđ</span></b> </td>
            </tr>
            <tr>
                <td class="table-plus"> Số lượng mua: </td>
                <td class="table-plus"><input class="form-control" type="number" name="sl" value="<?php echo $sl?>"> </td>
            </tr>
            <tr>
                <td class="table-plus" > Tổng tiền: </td>
                <td class="table-plus" > <b><?php $tt = $gia*$sl; echo number_format($tt);?> <span style="color: red">vnđ</span> </b>  </td>
            </tr>
        <tr>
            <td>
                <input type="submit" name="sm_sl" style="width: 100px" value="Cập nhật" class="btn btn-outline-success" >
            </td>
        </tr>
            <tr>
                <td class="table-plus" > Tên khách hàng: </td>
                <td class="table-plus" > <b> <?php echo $_SESSION['user'][3] ?> </b>  </td>
            </tr>
            <tr>
                <td class="table-plus" > Địa chỉ: </td>
                <td class="table-plus" ><input class="form-control" type="text" name="dia_chi"  placeholder="Nhập địa chỉ . . ."> </td>
            </tr>
            <tr>
                <td class="table-plus" > SĐT: </td>
                <td class="table-plus" ><input  class="form-control"  type="number" name="sdt" placeholder="Nhập số điện thoại . . ." >  </td>
            </tr>
            <tr>
                <td colspan="2" class="table-plus" ><input  class="btn btn-outline-danger" style="width: 500px"  name="sm" type="submit" value="Hoàn tất" > </td>
            </tr>
<?php         }
        ?>
    </table>
</form>
</div>
            <div class="card-footer  footer">
                <div class="footer1">
                    <div class="div1"><b style="display: block;margin-top: 20px; ">THÔNG TIN CÔNG TY</b><br>
                        <a href=""><span>Thông tin công ty</span></a><br>
                        <a href=""><span>Hỗ trợ khách hàng</span></a><br>
                        <a href=""> <span>Cách mua hàng</span> </a>
                    </div>
                </div>
                <div class="footer2">
                    <div class="div2">
                        <b style="display: block;">HỖ TRỢ KHÁCH HÀNG</b><br>
                        <a href=""><span>Liên hệ và góp ý</span></a><br>
                        <a href=""><span> Hướng dẫn mua hàng online</span></a><br>
                        <a href=""> <span> Hướng dẫn mua hàng trả góp</span></a><br>
                        <a href=""> <span> Quy chế quản lý hoạt động</span></a>
                    </div>
                </div>
                <div class="footer3">
                    <div class="div3">
                        <b style="display: block; margin-top: 45px;"> CHÍNH SÁCH MUA HÀNG</b><br>
                        <a href=""><span>Quy định, chính sách</span></a><br>
                        <a href=""><span>Chính sách bảo hành - Đổi trả</span></a><br>
                        <a href=""><span>Chính sách hội viên</span></a><br>
                        <a href=""><span>Giao hàng và lắp đặt</span></a>

                    </div>
                </div>
                <div class="footer4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14896.602629703322!2d105.7703402!3d21.026657000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1591873424650!5m2!1svi!2s" width="300" height="200" frameborder="0" style="border:0;"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
</body>
</html>