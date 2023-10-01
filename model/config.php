<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "qlykhachsan2";

$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
}
?>