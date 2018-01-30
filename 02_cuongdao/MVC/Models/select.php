


<?php
 

$sql     = "SELECT * FROM dsnhanvien";
$ket_qua = $conn->query($sql);

//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();}
?>