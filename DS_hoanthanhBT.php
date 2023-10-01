<?php 
include ('view/hearder.php')
?>
 <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5 >Danh sách ca chờ xử lý</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th style="color: #2f70aceb; font-size: 11px;">TT</th>
                <th style="color:#2f70aceb;font-size: 11px;">Mã Ca BT</th>
                <th style="color:#2f70aceb;font-size: 11px;">Mã phòng</th>
                <th style="color:#2f70aceb;font-size: 11px;">Tên Vật Tư</th>
                <th style="color:#2f70aceb;font-size: 11px;">Nguyên nhân BT</th>
                <th style="color:#2f70aceb;font-size: 11px;">Nhân viên xử lý</th>
                <th style="color:#2f70aceb;font-size: 11px;">Thời gian hoàn thành</th>
                <th style="color:#2f70aceb;font-size: 11px;">Trạng thái</th>
                </tr>
              </thead>
                    <?php
                    include_once('./model/config.php');

                    $loaidvsql = "SELECT tblbaotrivt.macabt,tblbaotrivt.maphong,tblvattu.tenvattu,tblbaotrivt.mt_tinhtrang,tblnhanvien.TenNV,tblbaotrivt.trangthaica,tblbaotrivt.tg_hoanthanh FROM tblbaotrivt
                     INNER JOIN tblvattu ON tblvattu.mavt = tblbaotrivt.mavt
                      INNER JOIN tblnhanvien ON tblnhanvien.ma_nhanvien = tblbaotrivt.ma_nhanvien 
                      WHERE tblbaotrivt.trangthaica = 'Hoàn Thành' OR tblbaotrivt.trangthaica = 'Chờ phê duyệt'
                      ORDER BY tblbaotrivt.macabt DESC;";

                    $re = mysqli_query($conn,$loaidvsql);

                    $data = [];

                    $TT = 1;
                    while($row = mysqli_fetch_array($re,MYSQLI_ASSOC)){
                        $data[] = array(
                            'TT' => $TT,
                            'macabt' => $row['macabt'],
                            'maphong' => $row['maphong'],
                            'tenvattu' => $row['tenvattu'],
                            'mt_tinhtrang' => $row['mt_tinhtrang'],
                            'TenNV' => $row['TenNV'],
                            'tg_hoanthanh' => $row['tg_hoanthanh'],
                            'trangthaica' => $row['trangthaica'],        
                        );
                        $TT++;
                    }
                ?>
                <tbody>
                <?php foreach ($data as $row) : ?>
						<tr>
                <td><?php echo $row ['TT']; ?></td>
                <td><?php echo $row['macabt']; ?></td>
                <td><?php echo $row['maphong']; ?></td>							
                <td><?php echo $row['tenvattu']; ?></td>
                <td><?php echo $row['mt_tinhtrang']; ?></td>
                <td><?php echo $row['TenNV']; ?></td>
                <td><?php echo $row['tg_hoanthanh']; ?></td>
                <td style="text-align: center;" ><button class="thcoler border border-white rounded-3 p-1 fw-bold  "><?php echo $row['trangthaica']; ?></button></td>
						</tr>
						<?php endforeach; ?>

                </tbody>
              </table>
          </div>
        </div>
<?php 
include ('view/footter.php')
?>
  <script>
    var roomStatusCells = document.querySelectorAll(".thcoler");

    roomStatusCells.forEach(function(cell) {
        var cellText = cell.textContent;
        var color;
        var backgroundColor;
        var width;
        var height;

        if (cellText === "Hoàn Thành") {
            color = "#FFFFFF";
            backgroundColor = "#CC0000";
        } else if (cellText === "Chờ phê duyệt") {
            color = "#FFFFFF";
            backgroundColor = "#003399";
        }

        // Đặt kích thước cho nút trạng thái
        width = "110px";
        height = "30px";

        cell.style.color = color;
        cell.style.backgroundColor = backgroundColor;
        cell.style.width = width;
        cell.style.height = height;
    });
</script>
