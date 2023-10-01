<?php
// Kết nối đến cơ sở dữ liệu MySQL
include("../model/config.php");

// Lấy dữ liệu từ MySQL và trả về dưới dạng JSON
$sql = "SELECT * FROM tblnhanvien";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tạo đối tượng SimpleXMLElement
    $xml = new SimpleXMLElement('<data></data>');

    while ($row = $result->fetch_assoc()) {
        // Tạo các phần tử con trong XML
        $item = $xml->addChild('item');
        foreach ($row as $key => $value) {
            $item->addChild($key, $value);
        }
    }

    // Thiết lập đầu ra là dạng XML
    header('Content-type: text/xml');
    echo $xml->asXML();
} else {
    echo "Không có dữ liệu.";
}

$conn->close();
?>