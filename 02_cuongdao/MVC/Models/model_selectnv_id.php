<?php
  /**
  * 
  */
  class edit
  {
  	
  	function getselect($id)
  	{
  		 $id = $_GET['id'];
  		require  'connect.php';
		$sql     = "SELECT * FROM dsnhanvien WHERE id = $id";
		
		// $ket_qua = $conn->query($sql);
		$ket_qua = $conn->query($sql);
		return $ket_qua;

		//print_r($row);
		
	
		if (!$ket_qua) {
		    die("Không thể thực hiện câu lệnh SQL: " . $conn->connect_error);
		    exit();}

  }
}
?>