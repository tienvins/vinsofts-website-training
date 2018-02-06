<?php
// Kiểm tra kết nối
// Kết nối
$host= "localhost";
$username = "root";
$password = "";
$dbname = "qlnhanvien"; 
$conn = new mysqli($host, $username, $password ,$dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    echo "kết nối thất bại";
} ?>
