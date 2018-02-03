<?php 
	require_once('controllers/c_nhansu.php');
	$id = $_GET['id'];
	$delete = new C_NhanSu();
	$delete->deleteNhansu($id);
	header('location: quanlynhansu.php');
 ?>