<?php
    session_start(); //kiem tra neu dax dang nhap tai khoan tif khong phai dang nhap lai
    if(isset($_SESSION['tentk'])){
		header('location:index.php');
	}

    $tentk = $_POST['tentk'];
    $pass = $_POST['pass'];
    $role = $_POST['doituong'];
    
    require_once 'config.php';

    // Truy vấn kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM tbltaikhoan WHERE tentk='$tentk' AND pass='$pass' AND doituong='$role'";
    //echo $query;exit;
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        // Đăng nhập thành công
        if ($role == "1") {
            $_SESSION['tentk'] = $tentk;
            $_SESSION['doituong'] = $role;
            $_SESSION['ma_nhanvien'] = $row['ma_nhanvien'];
            header("Location: ../index.php");
        } else if ($role == "0") {
            $_SESSION['tentk'] = $tentk;
            $_SESSION['doituong'] = $role;
            $_SESSION['ma_nhanvien'] = $row['ma_nhanvien'];
            header("Location: ../index.php");
        }
    } else {
        // Đăng nhập thất bại
        echo "<p>Tài khoản hoặc mật khẩu không chính xác!</p>";
    }


    
?>