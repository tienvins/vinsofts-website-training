<?php
	require_once "models/model.php";
	class C_thongtin{
		public function getDSNV(){
			$this->model=new Model();
			$tt=$this->model->getDanhSachNhanVien();
			print_r($tt);
			//require_once "views/v_thongtin.php";
		}

		public function getQuanLy(){
			$this->model=new Model();
			$tt=$this->model->getDanhSachNhanVien();
			require_once "views/v_quanly.php";
		}

		function addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$model=new Model();
			$tt=$model->addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh);
		}

		public function getNhanVienById($manv){
			$model=new Model();
			$tt=$model->getNhanVienById($manv);
			require_once "views/v_sua.php";
			print_r($tt);
		}

		function editNhanVien($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$model=new Model();
			$tt=$model->editNhanVien($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh);
		}
	}
?>