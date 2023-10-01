<?php
    $makh = $_GET['sid'];

    require_once 'config.php';

    $trangthaikh = 'Đã Thanh Toán';

    $dkphongsql = "UPDATE tbldkphong SET   trangthaikh  = '$trangthaikh' WHERE makh = '$makh';";
    //echo $dkphongsql;exit;

    mysqli_query($conn,$dkphongsql);

    header("Location: ../traphong.php") ;
    
    exit;
?>