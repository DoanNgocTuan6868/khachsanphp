<?php
    $macabt = $_POST['macabt'];
    $mt_tinhtrang = $_POST['mt_tinhtrang'];
    $ma_nhanvien = $_POST['ma_nhanvien'];
    $tg_hoanthanh = $_POST['tg_hoanthanh'];
    $mt_congviec = $_POST['mt_congviec'];
    $trangthaica = 'Chờ phê duyệt';

    include 'config.php';

    //lenh sql
    $editsql = "UPDATE tblbaotrivt SET   mt_tinhtrang  = '$mt_tinhtrang' ,ma_nhanvien  = '$ma_nhanvien' ,tg_hoanthanh = '$tg_hoanthanh', mt_congviec = '$mt_congviec' , trangthaica = '$trangthaica' WHERE macabt = '$macabt';";
    
    //echo $editsql;exit;
    //thuc hien cau lenh
    mysqli_query($conn,$editsql);

    // Them xong chuyen ve trang danh sach
    header("Location: ../DS_hoanthanhBT.php"); 
?>