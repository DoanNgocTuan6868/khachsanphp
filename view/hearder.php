<?php
	
	session_start();	// kiem tra dax dang nhap hay chua

	if(! isset($_SESSION['tentk'])){
		header('location:Login.php');
	}
	else{
		$idtk = $_SESSION['tentk'];
		$manv = $_SESSION['ma_nhanvien'];

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hệ Thông Nhân Viên</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />


<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@3;400;500;600;700;800&display=swap" rel="stylesheet"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />


</head>
<body>

<!--Header-part-->
<div id="header" >
    <a href="index.php">
        <img src="images/backgrounds/logo2_c.png" alt="" style="height: 50px; width: 150px;" > 
    </a>
    
</div>


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Trang Cá nhân</span></a></li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Đăng Xuất</span></a></li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Tìm Kiếm..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->

<div id="sidebar" style="background-color: #4977edba;"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Trang Chủ</span></a> </li>
    <li> <a href="dsnhanvien.php"><i class="icon icon-signal"></i> <span>Danh Sách Nhân viên</span></a> </li>
    
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Quản Lý Phòng</span></a>
      <ul>
        <li> <a href="dk_phong.php">Đăng Ký Phòng</a> </li>
        <li><a href="DS_datphong.php">Danh Sách Khách Đặt Phòng</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Quản Lý Trả Phòng</span></a>
      <ul>
        <li> <a href="kt_Knhanphong.php">Kiểm Tra Thông Tin Khách</a> </li>
        <li><a href="traphong.php">Trả Phòng</a></li>
      </ul>
    </li>

    
    <li class="submenu"> <a href="#"><i class="icon icon-fullscreen"></i> <span>Quản Ca Bảo Trì</span></a>
      <ul>
        <li> <a href="baotri.php">Xử Lý Bảo Trì</a> </li>
        <li><a href="DS_hoanthanhBT.php">Danh Sách Ca Hoàn Thành</a></li>
      </ul>
    </li>
   
    <li><a href="ngoaite.php"><i class="icon icon-th-list"></i> <span>Tỷ Giá Ngoại Tệ</span></a></li>
    
   
    </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang Chủ</a></div>
  </div>
  