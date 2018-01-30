<?php
	require_once("controllers/c_nhanvien.php");
	$id=$_GET['MaNV'];
	$controller=new C_NhanVien();
	$tt=$controller->deleteNhanVien($id);
	header('location:quanlynhanvien.php');
?>