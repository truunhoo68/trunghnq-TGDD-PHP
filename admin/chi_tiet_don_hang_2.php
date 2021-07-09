<?php
require "ketnoi.php";
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
$thongbao = '';
$arr = [];
if(isset($_POST['sm']) && isset($_FILES['upload'])){
    $anh = $_FILES['upload']['name'];
    if(empty($anh)){
        $arr[] = "bạn chưa upload ảnh";
    }

    if(empty($arr)){
        if ($_FILES['upload']['error'] > 0)
            echo "Upload lỗi rồi!";
        else {
            move_uploaded_file($_FILES['upload']['tmp_name'], 'img/' . $_FILES['upload']['name']);
            echo "upload thành công <br/>";
        }
        $sql = "INSERT INTO slide (anh_slide) VALUES ('$anh')";
        if(mysqli_query($con,$sql)){
            header("location: qt_slide.php");
        }else{
            echo "lỗi";
        }
    }else{
        $thongbao = implode('<br>',$arr);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>T Mobile - Shop Điện Thoại Di Động, Phụ Kiện Điện Thoại</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/icon_phone.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/icon_phone.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body>
<!-- <div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="vendors/images/logo.png" alt=""></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            <b>	Chờ Chút Nhé...!</b>  <b style="color: red;">Yêu Em :))</b>
        </div>
    </div>
</div> -->

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="Search Here">
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                            <i class="ion-arrow-down-c"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>

        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
                    <span class="user-name">
						<b >
							 <?php

                             echo $_SESSION['user'][3];
                             ?> </b>
						</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-container" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <table  class="data-table table nowrap text-center">
                    <thead>
                    <tr style="width: 400px">
                        <th class="table-plus datatable-nosort"> Tên khách hàng</th>
                        <th class="table-plus datatable-nosort"> Ảnh</th>
                        <th class="table-plus datatable-nosort"> Tên sản phẩm</th>
                        <th class="table-plus datatable-nosort"> Ngày mua</th>
                        <th class="table-plus datatable-nosort"> Địa chỉ</th>
                        <th class="table-plus datatable-nosort"> SĐT</th>
                        <th class="table-plus datatable-nosort"> Trạng thái</th>
                        <th class="table-plus datatable-nosort"> Hành động</th>
                        <th class="datatable-nosort"></th>
                    </tr>
                    </thead>
                    <tbody style="text-align: center;">
                    <?php
                    require_once "ketnoi.php";
                    $i=0;
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM don_hang where id = $id";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)){
                        while($num =  mysqli_fetch_assoc($result)){
                            ?>
                            <tr>

                                <td class="table-plus">
                                    <?php echo "<b >".$num['ten_kh']."</b>"?>
                                </td>
                                <td class="table-plus">
                                    <img src="img/<?php echo $num['anh_sp'] ?>" alt="" width="70" height="70">
                                </td>
                                <td class="table-plus" >
                                    <?php echo "<b >".$num['ten_sp']."</b>"?>
                                </td>
                                <td class="table-plus">
                                    <?php echo "<b >".$num['ngay_mua']."</b>"?>
                                </td>
                                <td class="table-plus">
                                    <?php echo "<b >".$num['dia_chi']."</b>"?>
                                </td>
                                <td class="table-plus">
                                    <?php echo "<b >".$num['sdt']."</b>"?>
                                </td>
                                <td class="table-plus" >
                                    <?php
                                    if($num['trang_thai']=='Đã xác nhận'){
                                        echo "<b style='color: blue'>".$num['trang_thai']."</b>";
                                    }else if($num['trang_thai']=='Chưa xác nhận'){
                                        echo "<b style='color: red'>".$num['trang_thai']."</b>";
                                    }else{
                                        echo "<b style='color: green'>".$num['trang_thai']."</b>";
                                    }
                                    ?>
                                </td>
                                <td class="table-plus">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <?php echo "<a class='dropdown-item' href='da_giao_hang.php?id=".$num['id']."'><i class='dw dw-checked'></i> Đã giao hàng</a> " ?>

                                            <a href="<?php echo "xoa_don_hang.php?id=".$num['id']."" ?>" class="dropdown-item"  onclick="return confirm('Bạn sẽ không thể khôi phục! Xác nhận xóa.')"><i class='dw dw-delete-3'></i>  Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php	}
                    }

                    ?>
                    </tbody>
                </table>

                <div class="right-sidebar">
                    <div class="sidebar-title">
                        <h3 class="weight-600 font-16 text-blue">
                            Layout Settings
                            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
                        </h3>
                        <div class="close-sidebar" data-toggle="right-sidebar-close">
                            <i class="icon-copy ion-close-round"></i>
                        </div>
                    </div>
                    <div class="right-sidebar-body customscroll">
                        <div class="right-sidebar-body-content">
                            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                            <div class="sidebar-btn-group pb-30 mb-10">
                                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                            </div>

                            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                            <div class="sidebar-btn-group pb-30 mb-10">
                                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                            </div>

                            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                            <div class="sidebar-radio-group pb-10 mb-10">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                                    <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                                </div>
                            </div>

                            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                            <div class="sidebar-radio-group pb-30 mb-10">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                                    <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                                    <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                                </div>
                            </div>

                            <div class="reset-options pt-30 text-center">
                                <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="left-side-bar">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="img/logo.png" alt="" class="dark-logo">
                            <img src="vendors/images/logo2.png" alt="" class="light-logo">
                        </a>
                        <div class="close-sidebar" data-toggle="left-sidebar-close">
                            <i class="ion-close-round"></i>
                        </div>
                    </div>
                    <div class="menu-block customscroll">
                        <div class="sidebar-menu">
                            <ul id="accordion-menu">
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-house-1"></span><span class="mtext">Quản Trị Sản Phẩm</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="index.php"> Tất Cả Sản Phẩm </a></li>
                                        <li><a href="them.php" > Thêm Sản Phẩm </a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-edit2"></span><span class="mtext">Quản Lý Danh Mục</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="ql_danh_muc.php">Tất Cả Danh Mục</a></li>
                                        <li><a href="them_danh_muc.php">Thêm Danh Mục</a></li>


                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-edit2"></span><span class="mtext">Quản Lý User</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="qt_user.php">Tất cả User</a></li>
                                        <li><a href="them_user.php">Thêm User</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-edit2"></span><span class="mtext">Quản Lý Đơn Hàng</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="qt_don_hang.php" class="active">Tất cả Đơn hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-library"></span><span class="mtext">Quản Trị Slide Show</span>

                                    </a>
                                    <ul class="submenu">
                                        <li><a href="qt_slide.php">Quản Trị Slide</a></li>
                                        <li><a href="them_slide.php">Thêm Ảnh Slide</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle">
                                        <span class="micon dw dw-edit2"></span><span class="mtext">Quản Lý Comment</span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="qtcmt.php">Quản Lí Comment</a></li>


                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/Du_an_1/index.php" class="dropdown-toggle">
                                        <span class="micon dw dw-house"></span><span class="mtext">Về Trang Chủ</span>
                                    </a>

                                </li>


                        </div>

                        <!-- js -->
                        <script src="vendors/scripts/core.js"></script>
                        <script src="vendors/scripts/script.min.js"></script>
                        <script src="vendors/scripts/process.js"></script>
                        <script src="vendors/scripts/layout-settings.js"></script>
                        <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
                        <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
                        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
                        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
                        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
                        <script src="vendors/scripts/dashboard.js"></script>
</body>
</html>
