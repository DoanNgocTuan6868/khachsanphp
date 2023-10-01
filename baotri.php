<?php
include ('view/hearder.php');
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
                <th style="color:#2f70aceb;font-size: 11px;">Trạng thái</th>
                <th style="color:#2f70aceb;font-size: 11px;">Thơi gian ĐK</th>
                <th style="color:#2f70aceb;font-size: 11px;">Hoạt Động</th>
                </tr>
              </thead>
              <?php
                include ('./model/config.php');

                $loaidvsql = "SELECT tblbaotrivt.macabt,tblbaotrivt.maphong,tblvattu.tenvattu,tblbaotrivt.mt_tinhtrang,tblbaotrivt.tg_dkbaotri,tblbaotrivt.trangthaica
                FROM tblbaotrivt
                INNER JOIN tblvattu ON tblvattu.mavt = tblbaotrivt.mavt
                WHERE tblbaotrivt.trangthaica = 'cho xu ly'";

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
                    'trangthaica' => $row['trangthaica'],
                    'tg_dkbaotri' => $row['tg_dkbaotri']
                    
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
                            <td><?php echo $row['trangthaica']; ?></td>
                            <td><?php echo $row['tg_dkbaotri']; ?></td>
                             
							<td style="text-align:center;">
                                <a  class="btn btn-info" href="edit_cabaotri.php?sid=<?php echo $row['macabt'];?>"><i class="icon icon-fullscreen"></i> Xử lý công việc </a>	
							</td>
						</tr>
						<?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
        
      
<?php 
include  ('view/footter.php');
?>