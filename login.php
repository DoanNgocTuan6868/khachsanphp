<?php
	//session_start();
	//require_once 'module/data/cf_login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Hệ Thống quản lý Hotel</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="pub/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="pub/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="pub/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="pub/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="pub/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="pub/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow bg-cover">
		<div class="container-fluid d-flex row align-items-center">
			<div class="brand-logo d-inline-flex m-2">
				<a href="trangchu.php">
					<img src="pub/vendors/images/Logo-hotelN.png" alt="">
				</a>
			</div> 
            <div class="login-title ">
                <h3 class="text-center"style="color: #000099;">HỆ THỐNG QUẢN LÝ HOTEL THIÊN TÂN</h3>
            </div>           	                     		           
		</div>
        
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="pub/vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Đăng Nhập Hệ Thống</h2>
						</div>

						<form action="model/cf_login.php" method="post">
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn active text-center m-auto">
										<input type="radio" name="doituong" id="doituong" value="1" checked>
										<div class="icon"><img src="pub/vendors/images/briefcase.svg" class="svg" alt=""></div>
										Quản Lý
										
									</label>
									<label class="btn">
										<input type="radio" name="doituong" id="doituong" value="0">
										<div class="icon"><img src="pub/vendors/images/person.svg" class="svg" alt=""></div>					
										Nhân Viên
									</label>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="tentk" placeholder="Tên tài khoản" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="pass" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Ghi nhớ</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="#">Quên mật khẩu</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									 <input class="btn btn-primary btn-lg btn-block" type="submit" value="Đăng Nhập">									
										<!-- <a class="btn btn-primary btn-lg btn-block" href="index.php">Đăng Nhập</a> -->
									<!-- <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Đăng Nhập</button> -->
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="pub/vendors/scripts/core.js"></script>
	<script src="pub/vendors/scripts/script.min.js"></script>
	<script src="pub/vendors/scripts/process.js"></script>
	<script src="pub/vendors/scripts/layout-settings.js"></script>

	
</body>
</html>