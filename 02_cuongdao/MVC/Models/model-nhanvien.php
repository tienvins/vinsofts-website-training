

<?php
class model_nhanvien
{
	public function getselect_all()
	{
		require  'connect.php';
		$sql     = "SELECT * FROM dsnhanvien";
		
		// $ket_qua = $conn->query($sql);
		$ket_qua = mysqli_query($conn, $sql);
		// $row = $ket_qua->fetch_assoc();
		//print_r($row);
		
		// die;
		return $ket_qua;

		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$ket_qua) {
		    die("Không thể thực hiện câu lệnh SQL: " . $conn->connect_error);
		    exit();
		}
	}



	
		}  

?>