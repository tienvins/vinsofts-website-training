	<?php
	require_once './models/model.php';
	class Ctrl_nhanvien
	{
		
		public function getlist()
		{
			$abc = new model();
			$ket = $abc->getselect_all();
			require_once("./Views/list.php");
		}
		 public function getselect_id()
		{
			$id  = $_GET['id'];
			$abc = new model();
			$getnhanvien = $abc -> getselect($id);			
			require_once("./Views/edit_nhanvien.php");
		}
		public function getupdate_ns()
		{
			$id = $_GET['id'];
			$abc = new model();
			$update = $abc -> getupdatenhanvien($id);
		}
		public function getxoanhanvien()
			  		
		{	
			 $id = $_GET['id'];
			 $bien = new model();
			 $xoanhanvien = $bien -> getxoa_nhanvien($id);

			  }
		public function getthemnhanvien()
		{
			$abc = new model();
			$getnhanvien = $abc-> getthemnhanvien();
			include_once './Views/themnhanvien.php';
		}	  	
	}
	?>