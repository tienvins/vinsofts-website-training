<?php
if(isset($_GET['MaNV'])){
	include 'models/connect.php';
	$manv=$_GET['MaNV'];
	$sql="Delete From db22_nhanvien Where MaNV=$manv";
	$result=mysqli_query($conn,$sql);
	header('Location:quanly.php');
}
?>