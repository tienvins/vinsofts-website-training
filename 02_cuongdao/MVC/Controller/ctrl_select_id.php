<?php
include('./models/model_selectnv_id.php');

class select_nhanvien
{
	 public function getselect_id()
	{
			$id  = $_GET['id'];
			$abc = new edit();
			$getnhanvien = $abc->getselect($id);
			// $modelnhanvien = $this->select_all();
			
			require_once("./Views/edit_nhanvien.php");
	}
}
$nhanvien = new select_nhanvien();
$nhanvien -> getselect_id();
?>
