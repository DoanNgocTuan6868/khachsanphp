<?php 
    //echo "tranh thêm";
    require_once 'config.php';
    $makh = $_POST['makh'];
    $maphong = $_POST['maphong'];
    $maloaiphong = $_POST['maloaiphong'];
    $tenkhachhang = $_POST['tenkhachhang'];
    $sdt_kh = $_POST['sdt_kh'];
    $cmnd_kh = $_POST['cmnd_kh'];
    //$sl_khach = $_POST['sl_khach'];
    $tg_nhanphong = $_POST['tg_nhanphong'];
    $maloaidv = $_POST['maloaidv'];
    $trangthaiphong = 'Phòng Trống';
    $trangthaikh = 'Chờ Thanh Toán';
    $tg_traphong = $_POST['tg_traphong'];
    
    


    $dkphongsql = "UPDATE tbldkphong SET   tg_traphong  = '$tg_traphong' , trangthaikh  = '$trangthaikh' WHERE makh = '$makh';";
    //echo $dkphongsql;exit;

    mysqli_query($conn,$dkphongsql);

    //cap nhat trang thái phòng
    $editsql = "UPDATE tblphong SET   trangthaiphong  = '$trangthaiphong' WHERE maphong = '$maphong';";

    mysqli_query($conn,$editsql);
    
    header("Location: ../kt_Knhanphong.php") ;
    
    exit;

    ?>