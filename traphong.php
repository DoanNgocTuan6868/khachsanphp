<?php
    include('./view/hearder.php')
?>
<br>
    
    
    <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Thông Tin Khách hàng</h5>
          </div>
          <?php
                include('./model/config.php');

                $loaidvsql = "SELECT * FROM ttchothanhtoan";

            $re = mysqli_query($conn,$loaidvsql);

            $data = [];

            $TT = 1;
            while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                $data[] = array(
                    'TT' => $TT,
                    'makh' => $row['makh'],
                    'tenkhachhang' => $row['tenkhachhang'],
                    'maphong' => $row['maphong'],
                    'tenloaiphong' => $row['tenloaiphong'],
                    'sdt_kh' => $row['sdt_kh'],
                    'cmnd_kh' => $row['cmnd_kh'],
                    'trangthaikh' => $row['trangthaikh'],
                    'tg_nhanphong' => $row['tg_nhanphong'],
                    'tg_traphong' => $row['tg_traphong'],
                    'SotienTT' => $row['SotienTT'],
                    
                );
                $TT++;
            }
            ?>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr >
                    <th>Thông Tin Khách Hàng</th>
                    <th>Thời Gian Nhận Phòng</th>
                    <th>Thời Gian Trả Phòng</th>
                    <th>Tổng Tiền</th>
                    <th>Hoạt Động</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $row) : ?>
                <tr>
                    <td> <?php echo $row['tenkhachhang']; ?> - <?php echo $row['sdt_kh']; ?> - <?php echo $row['maphong']; ?></td>
                    <td style="text-align: center;"><?php echo $row['tg_nhanphong']; ?></td>
                    
                    <td><?php echo $row['tg_traphong']; ?></td>
                    <td  style="text-align: center;"><?php echo $row['SotienTT']; ?></td>
                    
                    <td style="text-align: center;">
                        <a href="./model/cf_thanhtoan.php?sid=<?php echo $row['makh'];?>" class="btn btn-info" style="width: 100px;"> <i class="icon-check"></i>  Thanh Toán</a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <script>
                var roomStatusCells = document.querySelectorAll(".thcoler");

                roomStatusCells.forEach(function(cell) {
                    var cellText = cell.textContent;
                    var color;
                    var backgroundColor;

                    if (cellText === "Đã Thanh Toán") {
                        color = "#000000";
                        backgroundColor = "lightgreen";
                    } else if (cellText === "Đã nhận phòng") {
                        color = "White";
                        backgroundColor = "#FF6600";
                    } else if (cellText === "Đặt trước phòng") {
                        color = "#222222";
                        backgroundColor = "#33CCFF";
                    }else if (cellText === "Chờ Thanh Toán") {
                        color = "White";
                        backgroundColor = "blue";
                    }

                    cell.style.color = color;
                    cell.style.backgroundColor = backgroundColor;
                });
            </script>
<?php
    include('./view/footter.php')
?>