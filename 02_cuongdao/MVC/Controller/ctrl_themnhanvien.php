<?php
include('./Models/model_them.php');
/**
* 
*/
class them_nhanvien
{
	
	public function getselect()
	{
		$abc = new add();
		$getnhanvien = $abc-> getthemnhanvien();
		include_once './Views/themnhanvien.php';
	}
}
$themnhansu = new them_nhanvien();
$themnhansu -> getselect();
?>