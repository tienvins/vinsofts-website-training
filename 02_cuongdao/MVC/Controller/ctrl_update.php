<?php
include('./models/model_update.php');
/**
* 
*/
class Update_nhansu
{
	  
  
	function getupdate_ns()
	{
		$id = $_GET['id'];
		$abc = new update();
		$update = $abc -> getupdatenhanvien($id);
	}
}
$nhanvien = new Update_nhansu();
$nhanvien -> update_ns();
?>