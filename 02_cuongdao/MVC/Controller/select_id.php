<?php
include('./models/selectnv_id.php');

class select_nhanvien
{
	 public function select_id()
	{
			$id=$_GET['id'];
			$abc = new edit();
			$getnhanvien=$abc->select($id);
			// $modelnhanvien = $this->select_all();
			
			require_once("./Views/edit_nhanvien.php");
	}
}
$nhanvien = new select_nhanvien();
$nhanvien->select_id();
?>
