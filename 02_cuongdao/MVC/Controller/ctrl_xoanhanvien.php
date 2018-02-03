<?php

		 require './Models/xoa_nhanvien.php';

		  class xoanhanvien
		  {
		  	
		  	function getxoanhanvien()
		  		
		  	{	$id = $_GET['id'];
		  		$bien = new delete();
		  		$xoanhanvien = $bien -> xoa_nhanvien($id);

		  	}
		  }
		  $xoanhansu = new xoanhanvien();
		  $xoanhansu -> getxoanhanvien();
?>