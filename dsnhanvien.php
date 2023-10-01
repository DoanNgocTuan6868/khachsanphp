<?php
    include('./view/hearder.php')
?>
    <br>
    <div>
        <a href="themnv.php" class="btn btn-info" style="margin-left: 3px;">Thêm mới</a>
    </div>
    
    <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Danh sách nhân viên</h5>
          </div>
          <?php
                include('./model/config.php');

                $dsnvsql = "SELECT * FROM tblnhanvien";

                $result = mysqli_query($conn,$dsnvsql);

                $data = [];
                $TT = 1;
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $data[] = array(
                        'TT' => $TT,
                        'ma_nhanvien' => $row['ma_nhanvien'],
                        'TenNV' => $row['TenNV'],
                        'ChucVu' => $row['ChucVu'],
                        'SoDT' => $row['SoDT'],
                    );
                    $TT++;
                }
            ?>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr >
                    <th>TT</th>
                    <th>Mã Nhân Viên</th>
                    <th>Tên Nhân Viên</th>
                    <th>Chức vụ</th>
                    <th>Số ĐT</th>
                    <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $row) : ?>
                <tr>
                    <td style="text-align: center;"><?php echo $row['TT']; ?></td>
                    <td><?php echo $row['ma_nhanvien']; ?></td>
                    <td><?php echo $row['TenNV']; ?></td>
                    <td><?php echo $row['ChucVu']; ?></td>
                    <td><?php echo $row['SoDT']; ?></td>
                    <td style="text-align: center;">
                        <a href="" class="btn btn-info"> <ion-icon name="eye-outline"></ion-icon>  Xem thông tin</a>
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