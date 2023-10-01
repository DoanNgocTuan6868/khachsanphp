

<?php
include ('view/hearder.php');
$macabt = $_GET['sid'];


    include 'model/config.php';

    $sua_sql = "SELECT * FROM tblbaotrivt bt inner join tblvattu vt
    on bt.mavt = vt.mavt  inner join tblphong p on p.maphong = bt.maphong 
    WHERE macabt = '$macabt'";
 


    $result = mysqli_query($conn,$sua_sql);

    $row = mysqli_fetch_assoc($result);

    
?>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span8" >
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5 style="font-size:14px; color:#DD0000;">Nhập thông tin ca bảo trì</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="model/cf_xulybt.php" method="post" class="form-horizontal">
              <div class="control-group">
                <label for="macabt" class="control-label " >Mã ca :</label>
                <div class="controls">
                  <input type="text" class="span4" placeholder="Mã ca" id="macabt" name="macabt" value="<?php echo $row ['macabt'] ?>" readonly> 
                </div>
              </div>
              <div class="control-group">
                <label for="maphong"  class="control-label">Mã phòng:</label>
                <div class="controls">
                  <input type="text" class="span4" placeholder="mã phòng" id="maphong" name="maphong" value="<?php echo $row ['maphong'] ?>"  readonly>
                </div>
              </div>
              <div class="control-group">
                <label for="tenvattu" class="control-label">Tên vật tư :</label>
                <div class="controls">
                  <input type="text"  class="span7" placeholder="tên vật tư"  id="tenvattu" name="tenvattu" value="<?php echo $row ['tenvattu'] ?>"  readonly>
                </div>
              </div>
              <div class="control-group">
                <label for="mt_tinhtrang" class="control-label">Nguyên nhân bảo trì :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="nguyên nhân bảo trì" id="mt_tinhtrang" name="mt_tinhtrang" value="<?php echo $row ['mt_tinhtrang'] ?>"  required>
                </div>
              </div>
              <div class="control-group">
                <label for="ma_nhanvien" class="control-label">Mã nhân viên :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="mã nhân viên" id="ma_nhanvien" name="ma_nhanvien" placeholder="" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Thời gian hoàn thành</label>
                <div class="controls">
                  <input type="date" class="span11"  placeholder="dd/m/yy" type="date" name="tg_hoanthanh">
              
              </div>
              <div class="control-group">
                <label for="mt_congviec"  class="control-label">Mô tả công việc</label>
                <div class="controls">
                  <textarea class="span11" id="mt_congviec" name="mt_congviec"></textarea>
                </div>
              </div>
              <div class="form-actions">
              <input type="submit" class="btn btn-danger " style="margin-left:20%;" value="Hoàn thành bảo trì"> 
              </div>
            </form>
          </div>
        </div>
      </div>
      
</div>
<div class="span4">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Thông Tin Phòng Bảo Trì</h5>
          </div>
          <div class="widget-content nopadding">
            <img src="images/backgrounds/<?php echo $row ['anhphong'] ?>" width="80%" height="450px" style="margin-left: 10%;"><br>
            <h5 style="text-align: center;">Phòng <?php echo $row ['maphong'] ?></h5>
            <div style="margin: 45px;">
                <p><?php echo $row ['mt_phong'] ?></p>
                <label style="font-weight: bold;">Tên vật tư :   <?php echo $row ['tenvattu'] ?></label>
                <label style="font-weight: bold;">Nguyên nhân bảo trì :   <?php echo $row ['mt_tinhtrang'] ?>  </label>
            </div>
          </div>
        </div>
    </div>

<?php 
include  ('view/footter.php');
?>