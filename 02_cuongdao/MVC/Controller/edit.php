<?php
include('model-nhanvien.php');

class Controller_nhanvien
{
	 public function FunctionName()
	{
			$abc = new model_nhanvien();
			$abc->select_all();
			// $modelnhanvien = $this->select_all();
			
			require_once("./Views/list.php");
	}
	
		
}
$nhanvien = new Controller_nhanvien();
$nhanvien->FunctionName();
?>

