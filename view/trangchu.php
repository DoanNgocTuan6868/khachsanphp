<?php
    include('hearder.php')
?>
<div class="container-fluid">
   	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="dsnhanvien.php"> <i class="icon-user"></i> Nhân Viên </a> </li>
          <li> <a href="#"> <i class="icon-home"></i> Đặt Phòng</a> </li>
          <li> <a href="#"> <i class="icon-database"></i> Trả Phòng </a> </li>
          <li> <a href="baotri.php"> <i class="icon-lock"></i> Bảo Trì </a> </li>
         
        </ul>
   </div>
    <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Danh sách khách hàng</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Tên khách hàng</th>
                  <th>Số phòng</th>
                  <th>Loại phòng</th>
                  <th>Số điện thoai</th>
                  <th>Trạng thái khách hàng</th>
                  
        
                </tr>
              </thead>
              <tbody>
              <?php 
              include('./model/config.php');
              $khachhang = "SELECT * FROM tbldkphong dk inner join 
              tblphong p on p.maphong = dk.maphong inner join
               tblloaiphong lp on lp.maloaiphong = dk.maloaiphong
               WHERE dk.trangthaikh = 'Đặt trước phòng' OR dk.trangthaikh = 'Đã nhận phòng' ";
              $re = mysqli_query($conn,$khachhang);

              $data = [];
  
              $TT = 1;
              while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                $data[] = array(
                    'tenkhachhang' => $row['tenkhachhang'],
                    'maphong' => $row['maphong'],
                    'tenloaiphong' => $row['tenloaiphong'],
                    'sdt_kh' => $row['sdt_kh'],
                    'trangthaikh' => $row['trangthaikh'],
                    
                    
                );
                $TT++;
            }

              ?>
              <?php foreach ($data as $row) : ?>
						<tr>
                            
							              <td><?php echo $row['tenkhachhang']; ?></td>							
						              	<td><?php echo $row['maphong']; ?></td>
							              <td><?php echo $row['tenloaiphong']; ?></td>
                            <td><?php echo $row['sdt_kh']; ?></td>
                            <td style="text-align: center;"><button class="thcoler border border-white rounded-3 p-1 fw-bold "><?php echo $row['trangthaikh']; ?></button></td>
                            
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
                    var width;
                    var height;

                    if (cellText === "Đặt trước phòng") {
                        color = "#FFFFFF";
                        backgroundColor = "#009999";
                    } else if (cellText === "Đã nhận phòng") {
                        color = "#FFFFFF";
                        backgroundColor = "#FF6600";
                    } else if (cellText === "Khách đặt trước") {
                        color = "#FFFFFF";
                        backgroundColor = "#6600CC";
                    }
                    width = "130px";
                    height = "30px";
                    cell.style.color = color;
                    cell.style.backgroundColor = backgroundColor;
                    cell.style.width = width;
                    cell.style.height = height;
                });
            </script>
  
<?php
    include('footter.php');
?>