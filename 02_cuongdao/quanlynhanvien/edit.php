<?php require 'connect.php';?>
<?php
	$id=$_GET['id'];
$sql     = "SELECT * FROM dsnhanvien WHERE id =$id";


$ket_qua = $conn->query($sql);
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

 ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) 
 ?>                      
       <?php echo $row['quequan'] ?>       


