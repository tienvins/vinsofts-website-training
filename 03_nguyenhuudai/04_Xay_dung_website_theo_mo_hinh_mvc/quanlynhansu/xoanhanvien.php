<?php
	require_once("controllers/c_nhanvien.php");
	$id=$_GET['MaNV'];
	$nhanvien=new C_NhanVien();
	$nhanvien->deleteNhanVien($id);
	header('location:quanlynhanvien.php');
?>