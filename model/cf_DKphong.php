<?php 
    //echo "tranh thêm";
    require_once 'config.php';

    $maphong = $_POST['maphong'];
    $maloaiphong = $_POST['maloaiphong'];
    $tenkhachhang = $_POST['tenkhachhang'];
    $sdt_kh = $_POST['sdt_kh'];
    $cmnd_kh = $_POST['cmnd_kh'];
    $sl_khach = $_POST['sl_khach'];
    $tg_datphong = $_POST['tg_datphong'];
    $maloaidv = $_POST['maloaidv'];
    $trangthaikh = 'Đặt trước phòng';
    $trangthaiphong = 'Khách đặt trước';
    
    


    $dkphongsql = "INSERT INTO tbldkphong (maphong ,maloaiphong, tenkhachhang, sdt_kh, cmnd_kh , sl_khach, tg_datphong , maloaidv ,trangthaikh ) VALUES ('$maphong','$maloaiphong','$tenkhachhang','$sdt_kh' ,'$cmnd_kh','$sl_khach','$tg_datphong' ,'$maloaidv','$trangthaikh')";
    //echo $dkphongsql;exit;

    mysqli_query($conn,$dkphongsql);

    //cap nhat trang thái phòng
    $editsql = "UPDATE tblphong SET   trangthaiphong  = '$trangthaiphong' WHERE maphong = '$maphong';";

    mysqli_query($conn,$editsql);
    
    header("Location: ../DS_datphong.php") ;
    
    exit;
    
?>