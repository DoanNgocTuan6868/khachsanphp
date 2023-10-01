<?php
    include('./view/hearder.php')
?>
<?php
    include ('./model/config.php');

    $phongsql = "SELECT * FROM dsphongtrong";

    $re = mysqli_query($conn,$phongsql);

    $data = [];

    $TT = 1;
    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
        $data[] = array(
            'TT' => $TT,
            'maphong' => $row['maphong'],
            'tenphong' => $row['tenphong'],
            'tenloaiphong' => $row['tenloaiphong'],
            'anhphong' => $row['anhphong'],
            'trangthaiphong' => $row['trangthaiphong'],
            'giaphong' => $row['giaphong']
            
        );
        $TT++;
    }
    // truy vân số phòng trống
    $phongtrongsql = "SELECT COUNT(*) AS sophongtrong FROM tblphong WHERE trangthaiphong = 'Phòng Trống';";
    $re1 = mysqli_query($conn,$phongtrongsql);
    $row1 = mysqli_fetch_assoc($re1);

    //truy vân số phòng đơn
    $phongdonsql = "SELECT COUNT(*) AS sophongdon FROM tblphong WHERE maloaiphong = 'lp01'AND trangthaiphong = 'Phòng Trống';";
    $re2 = mysqli_query($conn,$phongdonsql);
    $row2 = mysqli_fetch_assoc($re2);

    //truy vân số phòng đôi
    $phongdoisql = "SELECT COUNT(*) AS sophongdoi FROM tblphong WHERE maloaiphong = 'lp02' AND trangthaiphong = 'Phòng Trống';";
    $re3 = mysqli_query($conn,$phongdoisql);
    $row3 = mysqli_fetch_assoc($re3);

    //truy vân số phòng đôi
    $phongvipsql = "SELECT COUNT(*) AS sophongvip FROM tblphong WHERE maloaiphong = 'lp03' AND trangthaiphong = 'Phòng Trống';";
    $re4 = mysqli_query($conn,$phongvipsql);
    $row4 = mysqli_fetch_assoc($re4);
?>
<div class="container-fluid">
   	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <h4> <img src="images/backgrounds/don.png" alt="" style="width: 45px;"> P - Đơn: <span style="color: crimson;"><?php echo $row2 ['sophongdon'] ?></span> </h4> </li>
          <li> <h4> <img src="images/backgrounds/living-room.png" alt="" style="width: 45px;"> P - Đôi: <span style="color: crimson;"><?php echo $row3 ['sophongdoi'] ?></span> </h4> </li>
          <li> <h4> <img src="images/backgrounds/vip.png" alt="" style="width: 45px;"> P - Vip: <span style="color: crimson;"><?php echo $row4 ['sophongvip'] ?> </span></h4> </li>
          <li> <h4> <img src="images/backgrounds/trong.png" alt="" style="width: 45px;"> P -  Trống: <span style="color: crimson;"><?php echo $row1 ['sophongtrong'] ?></span> </h4> </li>   
        </ul>
   </div>
   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
              <thead>
                <tr>
                    <th>Phòng</th>      
                    <th>Hình Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Giá Phòng</th>
                    <th>Hoạt Động</th>
                    
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $row) : ?>
                <tr>           
                    <td style="text-align: center;"><?php echo $row ['maphong']; ?> - <?php echo $row ['tenloaiphong']; ?></td>						   
                    <td style="text-align: center;">
                        <img src="images/backgrounds/<?php echo $row['anhphong'];?>" width="200" height="120">
                    </td>
                    <td style="text-align: center;"><button class="thcoler" style="border: 1px solid black; "><?php echo $row['trangthaiphong']; ?></button></td>
                    <td style="text-align: center;"><?php echo $row ['giaphong']; ?> VNĐ</td>
                    <td style="text-align: center;">
                        <a href="DK_datphong.php?sid=<?php echo $row['maphong'];?>" class="btn btn-info" style="width: 100px;"> <i class="icon-share"></i>  Đặt Phòng</a>
                        <a href="DK_nhanphong.php?sid=<?php echo $row['maphong'];?>" class="btn btn-warning" style="width: 100px;"> <i class="icon-check"></i>  Nhận Phòng</a>
                    </td>
                </tr>					
             <?php endforeach; ?>
              </tbody>
  
            </table>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  <script>
                var roomStatusCells = document.querySelectorAll(".thcoler");

                roomStatusCells.forEach(function(cell) {
                    var cellText = cell.textContent;
                    var color;
                    var backgroundColor;

                    if (cellText === "Phòng Trống") {
                        color = "#000000";
                        backgroundColor = "lightgreen";
                    } else if (cellText === "Đã có khách vào") {
                        color = "#222222";
                        backgroundColor = "#FF6600";
                    } else if (cellText === "Khách đặt trước") {
                        color = "#222222";
                        backgroundColor = "#33CCFF";
                    }

                    cell.style.color = color;
                    cell.style.backgroundColor = backgroundColor;
                });
            </script>
<?php
    include('./view/footter.php')
?>