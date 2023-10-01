<?php 
    //echo "tranh thêm";
    include 'config.php';
    $makh = $_POST['makh'];
    $maphong = $_POST['maphong'];
    $maloaiphong = $_POST['maloaiphong'];
    $tenkhachhang = $_POST['tenkhachhang'];
    $sdt_kh = $_POST['sdt_kh'];
    $cmnd_kh = $_POST['cmnd_kh'];
    $sl_khach = $_POST['sl_khach'];
    $tg_nhanphong = $_POST['tg_nhanphong'];
    $maloaidv = $_POST['maloaidv'];
    $trangthaiphong = 'Đã có khách vào';
    $trangthaikh = 'Đã nhận phòng';
    
    


    $dkphongsql = "UPDATE tbldkphong SET   tg_nhanphong  = '$tg_nhanphong' , trangthaikh  = '$trangthaikh' WHERE makh = '$makh';";
    //echo $dkphongsql;exit;

    mysqli_query($conn,$dkphongsql);

    //cap nhat trang thái phòng
    $editsql = "UPDATE tblphong SET   trangthaiphong  = '$trangthaiphong' WHERE maphong = '$maphong';";

    mysqli_query($conn,$editsql);
    
    header("Location: ../DS_datphong.php ") ;
    
    exit;
    
?>