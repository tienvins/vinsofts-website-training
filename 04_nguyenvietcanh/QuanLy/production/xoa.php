<?php
include 'connect.php';
if(isset($_GET['delete'])){
	
	$MaNV=$_GET['MaNV'];
		$sql="DELETE From nhanvien Where MaNV=$MaNV";
		$result= mysqli_query($conn,$sql);
		
}
?>