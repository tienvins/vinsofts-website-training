<?php
	require_once "models/model.php";
	class C_thongtin{
		//Gọi Model và Views lấy danh sách nhân viên cho trang index
		public function getDSNV(){
			$this->model=new Model();
			$tt=$this->model->getDanhSachNhanVien();
			require_once "views/v_thongtin.php";
		}

		//Gọi Model và Views lấy danh sách nhân viên cho trang quản lý
		public function getQuanLy(){
			$this->model=new Model();
			$tt=$this->model->getDanhSachNhanVien();
			require_once "views/v_quanly.php";
		}

		//Gọi hàm thêm nhân viên
		function addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$model=new Model();
			$tt=$model->addNhanVien($tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh);
		}
		
		//Gọi hàm lấy nhân viên theo mã nhân viên
		public function getNhanVienById($manv){
			$model=new Model();
			return $model->getNhanVienById($manv);
		}

		//Gọi gàm sửa nhân viên
		function editNhanVien($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh){
			$model=new Model();
			$tt=$model->editNhanVien($manv,$tennv,$ngaysinh,$quequan,$gioitinh,$sdt,$mapb,$hinh);
		}

		//Gọi hàm xóa nhân viên
		function deleteNhanVien($manv){
			$model=new Model();
			$tt=$model->deleteNhanVien($manv);
		}

		//Gọi hàm lấy danh sách phòng ban
		public function getPhongBan(){
			$this->model=new Model();
			$tt=$this->model->getPhongBan();
			require_once "views/v_phongban.php";
		}
	}
?>