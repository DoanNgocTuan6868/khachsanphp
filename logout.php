<?php
    session_start();
    if( isset($_SESSION['tentk'])){

        unset($_SESSION['tentk']);  //kiem tra trang thai dang nhap neu dang nhap xoa trang thai dang nhap

    }
    //echo "shshsh";
    // sau khi logout chuyen ve trang login
    header('location: Login.php');

?>