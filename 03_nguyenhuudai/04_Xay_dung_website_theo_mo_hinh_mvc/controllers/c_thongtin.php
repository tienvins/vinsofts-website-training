<?php
	require_once "models/model.php";
	class C_thongtin{
		public function getDSNV(){
			$this->model=new Model();
			$tt=$this->model->getDanhSachNhanVien();
			//print_r($tt);
			require_once "views/v_thongtin.php";
		}

		function addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$model=new Model();
			$tt=$model->addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh);
			if($tt>0){
			header('location:index.php');
			}
			else
			{
				echo "Sai";
			}
		}
	}
?>