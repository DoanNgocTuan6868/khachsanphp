<?php
    include('./view/hearder.php')
?>
<?php
    $url = 'https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=10'; // URL của API Vietcombank
    $data = file_get_contents($url); // Lấy nội dung từ URL của API
    $xml = simplexml_load_string($data); // Chuyển đổi dữ liệu từ XML sang đối tượng SimpleXMLElement
    ?>

<div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Bảng tỷ giá ngoại tệ</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr style="font-size:24pt;">
                  <th>Mã ngoại tệ</th>
                  <th>Tên ngoại tệ</th>
                  <th>Giá mua</th>
                  <th>Giá Bán</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($xml->Exrate as $exrate): ?>
                    <tr class="gradeX">
                        <td><?php echo $exrate['CurrencyCode']; ?></td>
                        <td><?php echo $exrate['CurrencyName']; ?></td>
                        <td style="color:red; font-weight: bold;"><?php echo $exrate['Buy']; ?></td>
                        <td style="color:red; font-weight: bold;"><?php echo $exrate['Sell']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <!-- <tr class="gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center">4</td>
                </tr> -->
                
              </tbody>
            </table>
          </div>
        </div>
<?php
    include('./view/footter.php')
?>
