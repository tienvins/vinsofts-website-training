<?php
require 'connect.php';
?>
<?php
 
// Câu SQL Insert
$sql     = "SELECT * FROM dsnhanvien" ;
// Thực hiện thêm record

$ket_qua = $conn->query($sql);
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}?>
<?php
while ($row = mysqli_fetch_array($ket_qua)) {
	  echo   $row['hoten'] ;
	  
	 }
	  ?>
	  