<?php
include('.Models/them-model.php');
/**
* 
*/
class them_nhanvien
{
	
	public function getselect()
	{
		$abc = new them();
		$getnhanvien = $abc-> themnhansu();
		require_once "./Views/list.php";
	}
}
$themnhansu = new them_nhanvien();
$themnhansu -> getselect();
?>