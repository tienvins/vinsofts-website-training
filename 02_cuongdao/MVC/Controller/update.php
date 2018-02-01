<?php
include('./models/update_model.php');
/**
* 
*/
class Update_nhansu
{
	  
  
	function update_ns()
	{
		$id = $_GET['id'];
		$abc = new update();
		$update = $abc -> updatenhanvien($id);
	}
}
$nhanvien = new Update_nhansu();
$nhanvien -> update_ns();
?>