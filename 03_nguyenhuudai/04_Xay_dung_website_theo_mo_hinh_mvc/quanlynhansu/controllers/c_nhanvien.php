<?php
	require_once "models/m_nhanvien.php";
	class C_NhanVien{
		//Gọi Model và Views lấy danh sách nhân viên cho trang index
		public function getDSNV(){
			$this->model 	= new M_NhanVien();
			$tt 			= $this->model->getDanhSachNhanVien();
			require_once "views/v_show_form.php";
		}

		//Gọi Model và Views lấy danh sách nhân viên cho trang quản lý
		public function getQuanLyNhanVien(){
			$this->model 	= new M_NhanVien();
			$tt 			= $this->model->getDanhSachNhanVien();
			require_once "views/v_show_table.php";
		}

		//Gọi hàm thêm nhân viên
		function addNhanVien($tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh){
			$model 	= new M_NhanVien();
			$tt 	= $model->addNhanVien($tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh);
		}
		
		//Gọi hàm lấy nhân viên theo mã nhân viên
		public function getNhanVienById($manv){
			$model 	= new M_NhanVien();
			return $model->getNhanVienById($manv);
		}

		//Gọi gàm sửa nhân viên
		function editNhanVien($manv, $tennv,  $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh){
			$model 	= new M_NhanVien();
			$tt 	= $model->editNhanVien($manv, $tennv, $ngaysinh, $quequan, $gioitinh, $sdt, $mapb, $hinh);
		}

		//Gọi hàm xóa nhân viên
		function deleteNhanVien($manv){
			$model 	= new M_NhanVien();
			$tt 	= $model->deleteNhanVien($manv);
		}

		//Gọi hàm lấy danh sách phòng ban
		public function getPhongBan(){
			$model 	= new M_NhanVien();
			return $model->getPhongBan();
			//require_once "views/v_danhsachphongban.php";
		}
	}
?>