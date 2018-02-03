<?php
include('./models/model_list.php');

class Controller_nhanvien
{
	 public function getlist()
	{
			$abc = new model_nhanvien();
			$ket = $abc->getselect_all();
			// $modelnhanvien = $this->select_all();
			
			require_once("./Views/list.php");
	}
}
$nhanvien = new Controller_nhanvien();
$nhanvien -> getlist();
?>

