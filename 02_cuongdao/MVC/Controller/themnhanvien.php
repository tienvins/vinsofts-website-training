<?php
include('./Models/them.php');
/**
* 
*/
class them_nhanvien
{
	
	public function getselect()
	{
		$abc = new add();
		$getnhanvien = $abc-> themnhanvien();
		include_once './Views/themnhanvien.php';
	}
}
$themnhansu = new them_nhanvien();
$themnhansu -> getselect();
?>