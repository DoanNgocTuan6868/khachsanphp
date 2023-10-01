<?php
    include('./view/hearder.php');
    $makh = $_GET['sid'];

    require_once 'model/config.php';
    //include_once(__DIR__.'/module/config.php');

    $sua_sql = "SELECT * FROM ttdatphong WHERE makh = '$makh'";
    //echo $sua_sql;exit;
    $result = mysqli_query($conn,$sua_sql);

    $row = mysqli_fetch_assoc($result);

    $maphong = $row ['maphong'];
    
    $sua1_sql = "SELECT * FROM tblphong WHERE maphong = '$maphong'";

    $result1 = mysqli_query($conn,$sua1_sql);

    $row1 = mysqli_fetch_assoc($result1);
?>
<div class="container-fluid" >
    <div class="row-fluid" >
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Nhập Thông Tin Khách Hàng</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="model/cf_DKNphong2.php" method="post" class="form-horizontal">
            <div class="control-group">
                    <label for="makh" class="control-label">Mã Khách Hàng : </label>
                <div class="controls">
                    <input type="text" class="span11" id="makh" name="makh" value="<?php echo $row ['makh'] ?>" required>
                </div>
              </div>
              <div class="control-group">
                    <label for="tenkhachhang" class="control-label">Tên khách hàng : </label>
                <div class="controls">
                    <input type="text" class="span11" id="tenkhachhang" name="tenkhachhang" value="<?php echo $row ['tenkhachhang'] ?>" required>
                </div>
              </div>
              <div class="control-group">
                    <label for="maphong" class="control-label">Số Phòng :  </label>
                <div class="controls">
                    <input type="text" class="span5" id="maphong" name="maphong"  value="<?php echo $row ['maphong'] ?>">
                </div>
              </div>
              <div class="control-group">
                    <label for="maloaiphong" class="control-label">Loại Phòng : </label>
                <div class="controls">
                    <input type="text" class="span5" id="maloaiphong" name="maloaiphong" value="<?php echo $row ['maloaiphong'] ?> ">
                </div>
              </div>
              <div class="control-group">
                    <label for="sdt_kh" class="control-label">Số Điện Thoại : </label>
                <div class="controls">
                    <input type="text" class="span11" id="sdt_kh" name="sdt_kh" value="<?php echo $row ['sdt_kh'] ?>" required>
                </div>
              </div>
              <div class="control-group">
                    <label for="cmnd_kh" class="control-label">CMND/CCCD : </label>
                <div class="controls">
                    <input type="text" class="span11" id="cmnd_kh" name="cmnd_kh" value="<?php echo $row ['cmnd_kh'] ?>" required>
                </div>
              </div>
              <div class="control-group">
                    <label for="sl_khach" class="control-label">Số Người : </label>
                <div class="controls">
                    <input type="text" class="span11" id="sl_khach" name="sl_khach" value="<?php echo $row ['sl_khach'] ?>"  required>
                </div>
              </div>
              
              <div class="control-group">
                    <label for="maloaidv" class="control-label">Gói Dịch Vụ : </label>
                <div class="controls">
                    <input type="text" class="span5" id="maloaidv" name="maloaidv" value="<?php echo $row ['maloaidv'] ?>" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Thời Gian Đặt Phòng :</label>
                <div class="controls">
                  <div  class="input-append date datepicker">
                  <input class="form-control" placeholder="dd/m/yy" type="datetime-local" name="tg_nhanphong"> 
                </div>
              </div>
              <div class="control-group">
                    <label for="giaphong" class="control-label">Giá Phòng : </label>
                <div class="controls">
                    <input type="text" class="span5" id="giaphong" name="giaphong" value="<?php echo $row ['giaphong'] ?>">
                </div>
              </div>
    
              <div class="form-actions">
                <button type="submit" class="btn btn-success" style="margin-left: 40%;">Nhận Phòng</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div> 
      <div class="span4">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Thông Tin Phòng</h5>
          </div>
          <div class="widget-content nopadding">
            <img src="images/backgrounds/<?php echo $row1 ['anhphong'] ?>" width="80%" height="450px" style="margin-left: 10%;"><br>
            <h5 style="text-align: center;">Phòng <?php echo $row ['maphong'] ?></h5>
            <div style="margin: 45px;">
                <p><?php echo $row1 ['mt_phong'] ?></p><br>
                <label style="font-weight: bold;">Trạng thái phòng :   <?php echo $row1 ['trangthaiphong'] ?></label>
                <label style="font-weight: bold;">Giá Phòng :   <?php echo $row ['giaphong'] ?> VNĐ </label>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
<?php
    include('./view/footter.php')
?>