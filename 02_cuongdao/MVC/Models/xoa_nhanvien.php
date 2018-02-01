<?php

class delete
{
	
	function xoa_nhanvien($id)
	{
		$id=$_GET['id'];
		include_once 'connect.php';
				

		$sql = "DELETE FROM dsnhanvien WHERE id=$id";


		if ($conn->query($sql) === TRUE) {
			   header('Location: http://lrv.vn/mvc/index.php?controller=user&act=list');
			} else {
			    echo "Error deleting record: " . $conn->error;
			}

		

}
}
?>