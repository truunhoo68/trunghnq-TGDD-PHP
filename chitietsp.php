<?php
session_start();
require_once "admin/ketnoi.php";
$arr = [];
$tb = "";
$id_sp =   $_GET['id'];
if(isset($_POST['sm'])){

  $email = $_POST['email'];
  $ten_kh = $_POST['ten'];
  $noi_dung = $_POST['binh_luan'];
if(empty($email)){
  $arr[] = 'Vui lòng nhập đầy đủ thông tin';
}
if(empty($ten_kh)){
  $arr[] = 'Vui lòng nhập đầy đủ thông tin';
}
if(empty($noi_dung)){
  $arr[] = 'Vui lòng nhập đầy đủ thông tin';
}
if(empty($arr)){
$sql = "INSERT INTO danh_gia (email,ten_kh,noi_dung,id_sp) VALUES ('$email','$ten_kh','$noi_dung',$id_sp) ";
if(mysqli_query($con,$sql)){
}else{
  echo 'Lỗi';
}
}else{
  $tb = implode($arr);
  ?>
 <script>
 alert("Vui lòng nhập đầy đủ thông tin");
 </script>
  <?php

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
	.lg:hover{
		transition: 2s;
		color: blue !important;
		font-size: 17px;
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
  border: none;
    background: -webkit-gradient(linear,left top,left bottom,from(red),to(white)); ;
    color:black;
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
.mua{
  border: white;
background-color: #ff3b3b !important !important;
}
.mua:hover{
  transition: 1s;
  background-color: black;
  border: white;
}
.splq{
  text-decoration: none !important;
}
.splq:hover{
  color: red;
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
			</ul>
		</div>
		<div class="row">
			<div class="navbar-brand" style="position: absolute;top: 20px; left: 40px"><a href="index.php" title=""><img src="img/logo.png" width="130" height="60"  alt="logo................."></a></div>
			<div class="input-group" style="height: 25px;width: 800px;margin-left: 250px">
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
		<div class="row">
			<div class="col-md-7" style="margin-left: 50px;padding: 0px ;">
				<div class="row " style="width: 100%; height: 210px; margin-top: 20px; display: block;">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="float: left">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
  <?php
		require "admin/ketnoi.php";
		$sql = "SELECT * FROM slide where id = 1";
		$res = mysqli_query($con,$sql);
		if(mysqli_num_rows($res)){
			while($slide = mysqli_fetch_assoc($res)){
				?>
    <div class="carousel-item active">
				<img  class="d-block w-100" style="width: 1050px !important; height: 300px;border:1px solid #c9c5d4" src="admin/img/<?php echo $slide['anh_slide'] ?>" alt="First slide">
				</div>

		<?php	}
		}
		?>
		<?php
		$sql = "SELECT * FROM slide where id != 1";
		$res = mysqli_query($con,$sql);
		if(mysqli_num_rows($res)){
			while($slide = mysqli_fetch_assoc($res)){
				?>
    <div class="carousel-item ">
				<img  class="d-block w-100" style="width: 1050px !important; height: 300px;border:1px solid #c9c5d4" src="admin/img/<?php echo $slide['anh_slide'] ?>" alt="First slide">
				</div>

		<?php	}
		}
		?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
			</div>

			</div>
		</div>
	</div>
	<div class="container-fluid" style="background: -webkit-gradient(linear,left top,left bottom,from(white),to(#f16e59));" >
    <div class="row" style="margin-top: 20px; margin-left: 20px">
    <?php
    require_once "admin/ketnoi.php";
    $sql = "SELECT * FROM danh_muc";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)){
      while($num = mysqli_fetch_assoc($result)){
        ?>
  
			<div class="col-md-2">
				<a class="nav-link danhmuc" href="index.php?loai_sp=<?php echo $num['ten_danh_muc'] ?>" title=""> <img class="rounded-circle" src="admin/img/<?php echo$num['anh'] ?>" width="50" height="50" alt=""> <br> <b style="margin-left: 10px"> <?php echo $num['ten_danh_muc'] ?></b></a>
      </div>
   <?php     }
    }
    ?>
			
</div>
	</div>
	<div class="container-fluid" style="font-family: rubik">
    <div class="row">
    <div class="col-md-6">
      <div class="brand">
      <?php 
 require_once "admin/ketnoi.php";
 
 $id = $_GET['id'];
 $ma = intval($id);
 $sql = "UPDATE  san_pham  SET view = view+1 WHERE id = $ma";
 if(mysqli_query($con,$sql)){
 }else{
     echo "lỗi";
 }
 $sql = "SELECT * from san_pham where id = '$id'";
 $result = mysqli_query($con,$sql);
 if(mysqli_num_rows($result)){
   while($row = mysqli_fetch_assoc($result)){
     ?>
        <img style="border: 1px solid #EEEEEE; padding: 15px; margin-top: 20px; margin-left: 70px"  src="admin/img/<?php echo $row['anh_sp'] ?>" alt="" width="450" height="450">
        <?php
   }
  }
        ?>
      </div>
      <div class="container">
      <div class="row" style="font-family: rubik">
        <h5 style="font-size: 16px;margin-top: 20px;margin-left: 70px; text-transform: uppercase;border-bottom: 2px solid red ">Sản Phẩm Liên Quan</h5>
        <div class="col-md-12">
          <div class="row" style="margin-top: 15px">
          <?php
				$masp = $_GET['id'];
				$sql = "SELECT * FROM san_pham WHERE id = '$masp'";
				$result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)){
					while($num = mysqli_fetch_assoc($result)){
						$loai = $num['loai_sp'];
						}
				}
				?>
          <?php 
          $masp = $_GET['id'];
 require_once "admin/ketnoi.php";
 $sql = "SELECT * from san_pham where loai_sp = '$loai' AND id != '$masp' ";
 $result = mysqli_query($con,$sql);
 if(mysqli_num_rows($result)){
   while($row = mysqli_fetch_assoc($result)){
     ?>
          <a class="splq" href="chitietsp.php?id=<?php echo $row['id'] ?>" title=""><div style="margin-left: 40px" class="col-md-2">
            <img src="admin/img/<?php echo $row['anh_sp'] ?>" width="75px" height="75px" alt="">
          </div>
          <div class="col-md-7">
            <p style="margin-bottom: 5px"><?php echo $row['ten_sp'] ?></p></a>
            <b><?php echo number_format($row['gia_sp']) ?> vnđ </b>
            <hr>
          </div>
          <?php
   }
  }
          ?>
           

        </div>
        </div>
        </div>
      </div>
    </div>
 <?php 
 require_once "admin/ketnoi.php";
 $id = $_GET['id'];
 $sql = "SELECT * from san_pham where id = '$id'";
 $result = mysqli_query($con,$sql);
 if(mysqli_num_rows($result)){
   while($row = mysqli_fetch_assoc($result)){
     ?>
    
    <div class="col-md-6">
      <h4 style="margin-top: 20px"><b><?php echo $row['ten_sp'] ?></b></h4>
      <hr>
      <span style="display: block;opacity: 80%"><?php echo $row['mo_ta'] ?></span>
      <hr>
      <div class="abc" style="font-size: 21px">
      <p>
        <label>
         <b> Price :</b>
        </label>
        <span style=" margin-left: 73px" class="money">
          $ <?php echo number_format($row['gia_sp']) ?>
        </span><b>vnđ</b>
      </p>
      <p>
        <label>
         <b > Status: </b>
        </label>
        <span style=" margin-left: 68px" class="money">
          <?php echo $row['trang_thai'] ?>
        </span>
      </p>
       <p>
        <label>
         <b style="margin-right: 40px;"> Quantity :</b>
        </label>
        <?php echo $row['so_luong'] ?>
      </p>
      <p>
        <?php
        require_once "admin/ketnoi.php";
        $id = $_GET['id'];
        ?>
      <a href="themgio.php?id_sp=<?php echo $id ?>"  class="m-1"><button  class="mua btn btn-danger">Thêm vào giỏ hàng</button></a>
       
        <a href="themgio2.php?id_sp=<?php echo $id ?>"><button type=""  class="mua btn btn-danger">Mua ngay</button></a>
      </p>
      </div>
    </div>
    <?php
   }
 }
  ?>
       </div>
  </div>

      
  <div class="container-fluid" style="background: -webkit-gradient(linear,left top,left bottom,from(#E6F1FD),to(white)); ;">
      <hr>
      <h4 style="font-family: roboto">ĐÁNH GIÁ SẢN PHẨM</h4>
      <hr>
      <?php
$id = $_GET['id'];
$sql = "SELECT * FROM danh_gia where id_sp = $id";
$re = mysqli_query($con,$sql);
if(mysqli_num_rows($re)){
	while($cmt = mysqli_fetch_assoc($re)){
		echo "<img src='admin/img/icon_name.png' style='width:30px; height:30px;' >  "."<b style='color:blue;'>".$cmt['ten_kh'].": </b>";
		echo "<i style=color:#1a8a06;font-size:20px;>".$cmt['noi_dung']."</i>";
		?> <hr> <?php
	}
}
?>
<?php if(isset($_SESSION['user'])){ }
      else{
        echo "<p style='color:red;'> Bạn chưa đăng nhập - Vui lòng đăng nhập để bình luận ! </p>";
      }?>
<hr>

      <form method="POST" accept-charset="utf-8">
      <br><b>Nhận Xét Của Bạn</b><textarea style="margin-top: 20px" class="form-control" name="binh_luan" placeholder="Nhập đánh giá sản phẩm "></textarea><br>
      <b>Họ Tên :</b> <input class="form-control" type="text" name="ten"  placeholder="Nhập tên của bạn" value="<?php if(isset($_SESSION['user'])){ echo $_SESSION['user'][3];}
      else{} ?>">
      <b>Email :</b> <input  class="form-control" type="text" name="email" placeholder="Nhập email của bạn" >
     <?php if(isset($_SESSION['user'])){  echo "<input type='submit' class='btn btn-success' name='sm'  style='margin-top: 20px' value='Đánh Giá'></input>"; }
     else{
      echo "<input type='submit' class='btn btn-success' name='sm'  style='margin-top: 20px' value='Đánh Giá' disabled></input>";
     } ?>
      </form>
      <hr>
    </div>
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