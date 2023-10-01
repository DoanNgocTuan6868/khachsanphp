<?php
    include('./view/hearder.php')
?>
    <br>
    
    
    <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Danh sách Khách hàng đặt phòng</h5>
          </div>
          <?php
                include('model/config.php');

                $loaidvsql = "SELECT * FROM ttdatphong";

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
                    'trangthaiphong' => $row['trangthaiphong'],
                    'tg_datphong' => $row['tg_datphong']
                    
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
                    <th>Thời Gian Đặt Phòng</th>
                    <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $row) : ?>
                <tr >
                    <td style="text-align: center;"><?php echo $row['makh']; ?> - <?php echo $row['tenkhachhang']; ?> - <?php echo $row['sdt_kh']; ?></td>
                    <td><?php echo $row['maphong']; ?> - <?php echo $row['tenloaiphong']; ?></td>
                    <td><?php echo $row['trangthaiphong']; ?></td>
                    <td><?php echo $row['tg_datphong']; ?></td>
                    
                    <td style="text-align: center;">
                        <a href="DK_nhanphong2.php?sid=<?php echo $row['makh'];?>" class="btn btn-warning" style="width: 100px;"> <i class="icon-check"></i>  Nhận Phòng</a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
<?php
    include('./view/footter.php')
?>