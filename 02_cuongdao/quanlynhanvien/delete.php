<?php require 'connect.php';?>
<?php
	$id=$_GET['id'];  //lấy id để delete
$sql     =  "DELETE FROM dsnhanvien
            WHERE id = $id";


$ket_qua = $conn->query($sql);
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

 ?> 

