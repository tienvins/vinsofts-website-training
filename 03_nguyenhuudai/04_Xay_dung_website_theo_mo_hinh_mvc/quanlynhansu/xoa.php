<?php
	require_once("controllers/c_thongtin.php");
	$id=$_GET['MaNV'];
	$controller=new C_thongtin();
	$tt=$controller->deleteNhanVien($id);
	header('location:quanly.php');
?>