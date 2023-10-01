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

                $dsnvsql = "SELECT tbldkphong.makh,tbldkphong.tenkhachhang , tbldkphong.maphong,tblloaiphong.maloaiphong,tblloaiphong.tenloaiphong ,tbldkphong.sdt_kh , tbldkphong.cmnd_kh ,tbldkphong.maloaidv,tbldkphong.tg_nhanphong,tblphong.trangthaiphong ,tblloaiphong.giaphong,tblloaidv.giadv,tbldkphong.trangthaikh
                FROM tbldkphong 
                INNER JOIN tblphong on tblphong.maphong = tbldkphong.maphong
                INNER JOIN tblloaiphong on tblloaiphong.maloaiphong = tbldkphong.maloaiphong
                INNER JOIN tblloaidv on tblloaidv.maloaidv = tbldkphong.maloaidv
                WHERE tblphong.trangthaiphong = 'Đã có khách vào' AND tbldkphong.trangthaikh = 'Đã nhận phong'";

                $result = mysqli_query($conn,$dsnvsql);

                $data = [];
                $TT = 1;
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $data[] = array(
                        'TT' => $TT,
                        'makh' => $row['makh'],
                        'tenkhachhang' => $row['tenkhachhang'],
                        'maphong' => $row['maphong'],
                        'tenloaiphong' => $row['tenloaiphong'],
                        'sdt_kh' => $row['sdt_kh'],
                        'cmnd_kh' => $row['cmnd_kh'],
                        'trangthaikh' => $row['trangthaikh'],
                        'tg_nhanphong' => $row['tg_nhanphong']
                    );
                    $TT++;
                }
            ?>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr >
                    <th>Thông Tin Khách Hàng</th>
                    <th>Thông Tin Phòng</th>
                    <th>Trạng Thái</th>
                    <th>Thời Gian Nhận Phòng</th>
                    <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?php echo $row['makh']; ?> - <?php echo $row['tenkhachhang']; ?> - <?php echo $row['sdt_kh']; ?></td>
                    <td><?php echo $row['maphong']; ?> - <?php echo $row['tenloaiphong']; ?></td>
                    <td  style="text-align: center;"><button class="thcoler"><?php echo $row['trangthaikh']; ?></button></td>
                    <td><?php echo $row['tg_nhanphong']; ?></td>
                    
                    <td style="text-align: center;">
                        <a href="TH_traphong.php?sid=<?php echo $row['makh'];?>" class="btn btn-info" style="width: 100px;"> <i class="icon-check"></i>  Trả Phòng</a>
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